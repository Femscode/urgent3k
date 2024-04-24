<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Bank;
use App\Models\Loan;
use App\Models\User;
use App\Models\Payroll;
use App\Models\Activity;
use App\Models\MySession;
use App\Models\Cancelloan;
use App\Models\ComingSoon;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Traits\TransactionTrait;
use App\Models\BulkSMSTransaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    use TransactionTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function analysis(Request $request)
    {
        $data['user'] = $user = Auth::user();
        if ($request->has('phone')) {
            $phone1 = $request->phone;
            $phone2 = "0" . $request->phone;
            $phone3 = "+234" . $request->phone;
            $phone4 = "+234" . substr($request->phone, 0);
            $phone5 = "234" . $request->phone;
            $phone6 = "234" . substr($request->phone, 0);
            $data['phone'] = $request->phone;
        } else {
            $data['active'] = 'analysis';
            $phone1 = $user->phone;
            $phone2 = "0" . $user->phone;
            $phone3 = "+234" . $user->phone;
            $phone4 = "+234" . substr($user->phone, 0);
            $phone5 = "234" . $user->phone;
            $phone6 = "234" . substr($user->phone, 0);
            $data['phone'] = $user->phone;
        }
        $data['active'] = 'analysis';


        $orders = DB::connection('mysql2')->table('orders')
            ->whereIn('phone', [$phone1, $phone2, $phone3, $phone4, $phone5, $phone6])
            ->get();
        $data['this_year'] = DB::connection('mysql2')->table('orders')
            ->whereIn('phone', [$phone1, $phone2, $phone3, $phone4, $phone5, $phone6])->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::today()])
            ->get()->sum('total_price');
        $data['this_month'] = DB::connection('mysql2')->table('orders')
            ->whereIn('phone', [$phone1, $phone2, $phone3, $phone4, $phone5, $phone6])->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::today()])
            ->get()->sum('total_price');

        $data['total_price'] = $orders->sum('total_price');

        $data['total_price_by_restaurant'] = $totalPriceByRestaurant = $orders->groupBy('user_id')->map(function ($orders) {
            $restaurantName = DB::connection('mysql2')->table('users')->where('id', $orders->first()->user_id)->pluck('name')->implode(', ');
            $totalPrice = $orders->sum('total_price');
            $count = $orders->count();

            return [
                'count' => $count,
                'restaurant_name' => $restaurantName,
                'total_price' => $totalPrice
            ];
        })->sortByDesc('total_price');
        // dd($orders);


        // dd($data, $orders, $user);
        return view('dashboard.analysis', $data);
        dd($user);
    }


    public function logout()
    {
        Auth::logout();
        // return Redirect::route('login');
        Session::flush();

        return Redirect::away('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        return redirect('/dashboard');
    }

    public function setpin(Request $request)
    {
        $this->validate($request, [
            'first' => 'required',
            'second' => 'required',
            'third' => 'required',
            'first' => 'required',
            'user_id' => 'required'
        ]);
        $pin = $request->first . $request->second . $request->third . $request->fourth;

        $hashed_pin = hash('sha256', $pin);

        $user = User::where('uuid', $request->user_id)->firstOrFail();
        $user->pin = $hashed_pin;
        $user->save();
        return true;
    }
    public function dashboard()
    {

        $data['user'] = $user = Auth::user();


        $data['active'] = 'dashboard';
        if ($user->block == 1) {

            return response()->view('dashboard.unverified', $data);
        }
        // dd('here',$user);
        if ($user->pin == null) {
            return response()->view('dashboard.setpin', $data);
        } else {

            // $data['banks'] = Bank::all();

            $notification = Notification::where('user_id', $user->company_id)->where('type', 'General Notification')->first();

            if ($notification && $notification->title !== null) {
                $data['notification'] = $notification;
            }
            $data['loans'] = Loan::where('user_id', $user->id)->latest()->get();
            $data['activities'] = Activity::where('user_id', $user->id)->latest()->get();
            $data['transactions'] = Transaction::where('user_id', $user->id)->latest()->paginate(5);
            // $data['withdrawals'] = Withdrawal::where('user_id',$user->id)->get();
            //    dd($data);

            $loans = Loan::where('user_id', $user->id)->latest()->take(100)->get();

            // Calculate day difference for each loan
            $loans->each(function ($loan) {
                $createdDate = new DateTime($loan->created_at);
                $currentDate = new DateTime();
                $interval = $currentDate->diff($createdDate);
                $dayDifference = $interval->days;

                // Add dayDifference property to the loan object
                $loan->dayDifference = $dayDifference;
            });
            $data['loans'] = $loans;

            return response()->view('dashboard.index', $data);
        }
    }


    public function delete_order(Request $request)
    {
        $session = MySession::find($request->id);
        $session->delete();
        return true;
    }
    public function profile()
    {
        $data['user'] = Auth::user();
        $data['active'] = 'profile';
        return view('dashboard.profile', $data);
    }
    public function myloans()
    {
        $data['user'] = $user =  Auth::user();

        $loans = Loan::where('user_id', $user->id)->latest()->take(100)->get();

        // Calculate day difference for each loan
        $loans->each(function ($loan) {
            $createdDate = new DateTime($loan->created_at);
            $currentDate = new DateTime();
            $interval = $currentDate->diff($createdDate);
            $dayDifference = $interval->days;

            // Add dayDifference property to the loan object
            $loan->dayDifference = $dayDifference;
        });
        $data['loans'] = $loans;

        $data['active'] = 'loans';
        return view('dashboard.myloans', $data);
    }
    public function kyc()
    {
        $data['user'] = Auth::user();
        $data['active'] = 'kyc';
        return view('dashboard.kyc', $data);
    }
    public function process_order(Request $request)
    {
        $response = Http::post(env('SECOND_APP') . '/api/process_order', [
            'order_id' => $request->order_id,

        ]);
        return $response;

        dd($request->all());
    }
    public function resend_verification()
    {
        $auth_user = Auth::user();
        $user = User::where('id', $auth_user->id)->first();
        if ($user->email_resend <= 3) {
            $user->email_resend += 1;
            $user->save();
            $user->sendEmailVerificationNotification();
            return redirect()->back()->with('message', 'Verification mail sent successfully!');
        } else {
            return redirect()->back()->with('message', 'Maximum amount of time to resend email reached!');
        }
    }
    public function fundwallet()
    {


        $data['user'] = $user = Auth::user();
        $data['active'] = 'fundwallet';
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Payment Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }

        return view('dashboard.fundwallet', $data);
    }
    public function withdraw()
    {

        $data['user'] = $user = Auth::user();
        $data['active'] = 'fundwallet';


        return view('dashboard.withdraw', $data);
    }
    public function confirm_account(Request $request)
    {
        // dd($request->all());
        $url = "https://api.paystack.co/transferrecipient";

        $fields = [
            'type' => "nuban",
            'name' => "",
            'account_number' => $request->account_no,
            'bank_code' => $request->bank_code,
            'currency' => "NGN"
        ];

        $fields_string = http_build_query($fields);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
            "Cache-Control: no-cache",
        ));

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute post
        $result = curl_exec($ch);
        $res_json = json_decode($result, true);
        if ($res_json['status'] == true) {
            return $res_json;
        }
        return false;
        dd($res_json);
    }


    public function make_withdraw(Request $request)
    {

        $this->validate($request, [
            'amount' => 'required'
        ]);
        $user = Auth::user();

        $user_pin = $request->first . $request->second . $request->third . $request->fourth;
        // dd($user_pin);

        $hashed_pin = hash('sha256', $user_pin);
        if ($user->pin !== $hashed_pin) {
            // return "Incorrect pin";
            $response = [
                'success' => false,
                'message' => 'Incorrect Pin',

            ];

            return response()->json($response);
        }
        // dd($request->all());




        $reference = 'LNR-' . Str::random(7);
        $recipient = User::where('phone', $request->account_id)->first();
        $loan = Loan::create([
            'uid' => Str::uuid(),
            'reference' => 'LNR-' . Str::random(5),
            'user_id' => $user->id,
            'amount' =>  $request->amount,
            'charges' => 0.08 * $request->amount,
            'totalamount' => $request->amount + (0.08 * $request->amount),
            'status' => 2,
        ]);
        $user->fund = 0;
        $user->borrowed = $loan->totalamount;
        $user->save();


        $details = "Loan Request of NGN " . $request->amount . " to " . $request->account_no . ' (' . $request->bank_name . ')' . ' Account Name: ' . $request->account_name;
        $tranx =  $this->create_transaction('Loan Request', $reference, $details, 'debit', $request->amount, $user->id, 2, 0);
        $details = "Fund Request of ₦" . $request->amount;
        $this->create_activity($tranx->uid, $user->id, 'Loan Request', $details, 2);

        $data = array('username' => $user->name, 'tranx_id' => $tranx->id,  'amount' => $request->amount);
        // dd($data);
        $amount = $request->amount;
        //send mail to the admin

        // Mail::send('mail.withdraw_request', $data, function ($message) use ($amount) {
        //     $message->to('fasanyafemi@gmail.com')->subject("Withdrawal request of NGN" . $amount);
        //     $message->from('support@vtubiz.com', 'VTUBIZ');
        // });
        // return true;

        $response = [
            'success' => true,
            'status' => true,
            'message' => 'Withdraw on pending',

        ];

        return response()->json($response);
    }
    public function make_transfer_with_paystack(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required'
        ]);
        $user = Auth::user();
        $user_pin = $request->first . $request->second . $request->third . $request->fourth;

        $hashed_pin = hash('sha256', $user_pin);
        if ($user->pin !== $hashed_pin) {
            $response = [
                'success' => false,
                'message' => 'Incorrect Pin',

            ];

            return response()->json($response);
        }
        $url = "https://api.paystack.co/transfer";
        $reference = 'my-unique-reference-' . strtolower(preg_replace('/[0-9]/', '', Str::random(3)));
        $amount = ($request->amount * 100) + 100;
        //the pin validation here;

        if ($user->balance < $request->amount + 100) {
            $response = [
                'success' => false,
                'message' => 'Insufficient Balance',

            ];

            return response()->json($response);
        }
        $fields = [
            'source' => "balance",
            'amount' => $amount - 100,
            "reference" => $reference,
            'recipient' => $request->recipient_code,
            'reason' => "CT_TASTE VENDOR PAYOUT"
        ];

        $fields_string = http_build_query($fields);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
            "Cache-Control: no-cache",
        ));

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute post
        $result = curl_exec($ch);
        echo $result;
        $res_json = json_decode($result, true);

        if ($res_json['status'] == true) {
            $details = "Withdraw of NGN " . $request->amount . " to " . $request->account_name;
            $this->create_transaction('Funds Withdraw', $reference, $details, 'debit', $request->amount + 100, $user->id, 1);

            $user->balance -= $request->amount + 100;
            $user->save();

            return $res_json;
        } else {
            $details = "Failed Withdraw of NGN " . $request->amount . " to " . $request->account_name;
            $this->create_transaction('Funds Withdraw', $reference, $details, 'debit', $request->amount + 100, $user->id, 0);

            $user->balance -= $request->amount + 100;
            $user->save();

            return $res_json;
        }
        return false;
        dd($res_json);
    }
    public function transactions()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'transaction';

        $data['transactions'] = Transaction::where('user_id', $user->id)->latest()->get();

        if ($user->type == 'admin') {
            return view('business_backend.mytransactions', $data);
        }
        return view('dashboard.transactions', $data);
    }
    public function activities()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'activities';

        $data['activities'] = Activity::where('user_id', $user->id)->latest()->get();


        return view('dashboard.activities', $data);
    }
    public function bulksms_transactions()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'transaction';
        $data['transactions'] = BulkSMSTransaction::where('user_id', $user->id)->latest()->get();

        return view('dashboard.bulksms_transactions', $data);
    }
    public function updateprofile(Request $request)
    {
       

        $user = Auth::user();
        if ($request->image !== null) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('brand_images'), $imageName);
            $user->logo = $imageName;
        }


        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->instagram = $request->instagram;
        if ($request->bvn !== null) {
            $user->bvn = $request->bvn;
            $user->bank_name = $request->bank_name;
            $user->account_no = $request->account_number;
            $user->account_name = $request->account_name;

            $str_name = explode(" ", $user->name);
            $first_name = $str_name[0];
            $last_name = end($str_name);
             $trx_ref = Str::random(7);
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                 'Authorization' => 'Bearer ' . env('FLW_SECRET_KEY'), // Replace with your actual secret key
            ])
                ->post('https://api.flutterwave.com/v3/virtual-account-numbers/', [
                    'email' => $user->email,
                    'is_permanent' => true,
                    'bvn' => $request->bvn,
                    'tx_ref' => $trx_ref,
                    'phonenumber' => $user->phone,
                    'firstname' => $first_name,
                    'lastname' => $last_name,
                    'narration' => 'URGENT3K/' . $first_name . '-' . $last_name,
                ]);

          
            $responseBody = $response->body(); // Get the response body as a string
            $responseStatusCode = $response->status(); // Get the HTTP status code

            // You can also convert the JSON response to an array or object if needed:
            $responseData = $response->json(); // Converts JSON response to an array


            $user->bank_name = $responseData['data']['bank_name'];
            $user->account_no = $responseData['data']['account_number'];
            $user->account_name = 'URGENT3K/' . $first_name . '-' . $last_name;
            $user->approved = 1;
           
        }

        $user->save();
        return redirect()->back()->with('message', 'User Profile Updated Successfully!');
    }
    public function kycreg(Request $request)
    {

        // dd($request->all());



        // Interswitch test API endpoint
        $endpoint = "https://sandbox.interswitchng.com/credit-score-engine/v1/credit-score";

        // Test client ID and secret
        $client_id = "IKIA9614B82064D632E9B6418DF358A6A4AEA84D7218";
        $client_secret = "XCTiBtLy1G9chAnyg0z3BcaFK4cVpwDg/GTw2EmjTZ8=";

        // Sample user MSISDN (replace with actual user data)
        $msisdn = "2348012345678";

        // Construct authentication token
        $auth_token = base64_encode("$client_id:$client_secret");


        // Construct request data
        $data = array(
            "msisdn" => '2349058744473',
            // You may add other required fields here
        );

        // Send POST request
        $ch = curl_init($endpoint);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Basic ' . $auth_token
        ));

        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }

        curl_close($ch);

        // Output response
        dd($response);



        // API endpoint
        $url = 'https://api.flutterwave.com/v3/bvn/verifications';

        // Data to be sent
        $data = array(
            'bvn' => $request->bvn,
            'firstname' => 'Fasanya',
            'lastname' => 'Oluwapelumi',
            'redirect_url' => 'https://example-url.company.com'
        );

        // Encode data to JSON format
        $post_data = json_encode($data);

        // Initialize curl
        $ch = curl_init();

        // Set the curl options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . env('FLW_SECRET_KEY') // Replace YOUR_API_KEY with your actual API key
        ));

        // Execute the request
        $response = curl_exec($ch);

        // Check for errors
        if ($response === false) {
            return 'Curl error: ' . curl_error($ch);
        } else {
            // Decode the response
            $responseData = json_decode($response, true);

            // Handle the response
            print_r($responseData);
        }

        // Close curl
        curl_close($ch);

        dd($request->all());

        $user = Auth::user();
        if ($request->image !== null) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('brand_images'), $imageName);
            $user->logo = $imageName;
        }
        $username = str_replace(' ', '-', $request->name);
        $username = substr($username, 0, 6);
        $username = "SWB-" . $username;

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->username = $username;
        $user->description = $request->description;
        $user->save();
        return redirect()->back()->with('message', 'User Profile Updated Successfully!');
    }
}
