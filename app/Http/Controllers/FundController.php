<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use App\Models\Activity;
use App\Models\Interest;
use App\Models\Cancelloan;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Traits\TransactionTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class FundController extends Controller
{
    use TransactionTrait;
    public function myloans()
    {
        $data['user'] = $user = Auth::user();
        $data['company'] = User::where('id', $user->company_id)->first();

        // dd($user);
        $data['active'] = 'loan';
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
            $data['loans'] = loan::where('user_id', $user->id)->orWhere('client_id', $user->id)->latest()->get();
            //    dd($data);

            return response()->view('dashboard.myloans', $data);
        }
    }

    public function requestfund()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'loan';
        if ($user->fund == 0) {
            return redirect()->back()->with('error', 'You are currently not eligible to access any funds!');
        }
        return view('dashboard.requestfund', $data);
    }
    public function makepayment($id)
    {
        $data['user'] = Auth::user();
        $data['active'] = 'loan';
        $data['loan'] = Loan::where('uid', $id)->first();
        return view('dashboard.makepayment', $data);
    }
    public function loaninfo($id)
    {
        $data['user'] = Auth::user();
        $data['active'] = 'loan';
        $data['loan'] = $loan = Loan::where('uid', $id)->first();
        $data['interests'] = Interest::where('loanId', $id)->latest()->paginate(10);
        $data['totalinterest'] = $loan->charges + Interest::where('loanId', $id)->sum('interest');
        return view('dashboard.loaninfo', $data);
    }

    public function retrieveclient(Request $request)
    {
        $data = $request->client_id;
        $user = User::where('username', $request->client_id)->first();

        if ($user === null) {
            return false;
        }

        return $user;
    }

    public function saveloan(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            "client_id" => ['required'],
            "product_name" => "required",
            "subtotal" => "required",
            "charges" => "required",
            "amount" => "required",
            "paymentmode" => "required"
        ]);

        $user = Auth::user();
        $client =  User::where('username', $request->client_id)->first();
        if ($client === null) {
            return redirect()->back()->with('error', 'Client does not exist!');
        }
        $loan = loan::create([
            'uid' => Str::uuid(),
            'reference' => "SWBP" . Str::random(5),
            'user_id' => $user->id,

            'client_id' => $client->id,
            'product_name' => $request->product_name,
            'charges' => $request->charges,
            'subamount' => $request->subtotal,
            'totalamount' => $request->amount,
            'payment_method' => $request->paymentmode,
        ]);

        $data['user'] = $user = Auth::user();
        $data['amount'] = $amount = $loan->totalamount;
        $data['active'] = 'fundwallet';
        $data['loan'] = $loan;
        if ($loan->paymentmode == 'Card') {
            $env = env('FLW_PUBLIC_KEY');

            $data['public_key'] = $env;
            $data['callback_url'] = 'https://urgent3k.com/payment/callback';


            return view('dashboard.pay_with_card', $data);
        } else {

            $str_name = explode(" ", $user->name);
            $first_name = $str_name[0];
            $last_name = end($str_name);
            // return view('dashboard.direct_transfer',$data);  
            // $env = User::where('email', 'fasanyafemi@gmail.com')->first()->remember_token;
            $trx_ref = $loan->uid;

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                // 'Authorization' => 'Bearer ' . $env, // Replace with your actual secret key
                'Authorization' => 'Bearer ' . env('FLW_SECRET_KEY'), // Replace with your actual secret key
            ])
                ->post('https://api.flutterwave.com/v3/virtual-account-numbers/', [
                    'email' => $user->email,
                    'is_permanent' => false,
                    // 'bvn' => 12345678901,
                    'tx_ref' => $trx_ref,
                    'phonenumber' => $user->phone,
                    'amount' => $amount,
                    'firstname' => $first_name,
                    'lastname' => $last_name,
                    'narration' => 'urgent3k/' . $first_name . '-' . $last_name,
                ]);

            // You can then access the response body and status code like this:
            $responseBody = $response->body(); // Get the response body as a string
            $responseStatusCode = $response->status(); // Get the HTTP status code

            // You can also convert the JSON response to an array or object if needed:
            $responseData = $response->json(); // Converts JSON response to an array
            // dd($responseData, 'here');
            $data['bank_name'] = $responseData['data']['bank_name'];
            $data['account_no'] = $responseData['data']['account_number'];
            $data['amount'] = ceil($responseData['data']['amount']);
            $data['expiry_date'] = $responseData['data']['expiry_date'];
            return view('dashboard.direct_transfer', $data);
        }
    }
    public function payloan(Request $request)
    {
        $this->validate($request, [
            "amount" => "required",
            "paymentmode" => "required",
            "paymenttype" => "required",
            "loanId" => "required",
           
        ]);
        


        $user = Auth::user();
        $data['loanId'] = $request->loanId;
        $data['user'] = $user = Auth::user();
        $data['amount'] = $amount = $user->borrowed;
        $data['active'] = 'fundwallet';
        if ($request->paymenttype == 'Part') {
            $data['amount'] = $amount = $request->partpaymentamount;
        }
        // dd($amount);

        if ($request->paymentmode == 'Card') {
            $env = env('FLW_PUBLIC_KEY');

            $data['public_key'] = $env;
            $data['callback_url'] = 'https://urgent3k.com/payment/callback';


            return view('dashboard.pay_with_card', $data);
        } else {

            // this is the endpoint for generate temporary account for each loan
            // $str_name = explode(" ", $user->name);
            // $first_name = $str_name[0];
            // $last_name = end($str_name);
            // $trx_ref = "URG" . Str::random(7);
            // $response = Http::withHeaders([
            //     'Content-Type' => 'application/json',
            //     'Authorization' => 'Bearer ' . env('FLW_SECRET_KEY'), // Replace with your actual secret key
            // ])
            //     ->post('https://api.flutterwave.com/v3/virtual-account-numbers/', [
            //         'email' => $user->email,
            //         'is_permanent' => false,
            //         // 'bvn' => 12345678901,
            //         'tx_ref' => $trx_ref,
            //         'phonenumber' => $user->phone,
            //         'amount' => $amount,
            //         'firstname' => $first_name,
            //         'lastname' => $last_name,
            //         'narration' => 'urgent3k/' . $first_name . '-' . $last_name,
            //     ]);

            // $responseBody = $response->body(); // Get the response body as a string
            // $responseStatusCode = $response->status(); // Get the HTTP status code

            // $responseData = $response->json(); // Converts JSON response to an array
            // // dd($responseData, 'here');
            // $data['bank_name'] = $responseData['data']['bank_name'];
            // $data['account_no'] = $responseData['data']['account_number'];
            // $data['amount'] = ceil($responseData['data']['amount']);
            // $data['expiry_date'] = $responseData['data']['expiry_date'];
            
            // the endpoint for fetching generated account

            $data['bank_name'] = $user->bank_name;
            $data['account_no'] = $user->account_no;
            $data['account_name'] = $user->account_name;
            $data['amount'] = ceil($amount);
        //   dd($data);

            return view('dashboard.direct_transfer', $data);
        }
    }
    public function slug($slug)
    {
        // dd($slug);
        $data['user'] = $user = Auth::user();
        $data['loan'] = $loan = loan::where('reference', $slug)->first();
        $data['active'] = 'loan';
        $data['activities'] = Activity::where('user_id', $user->id)->where('loan_id', $loan->uid)->latest()->get();

        $cancel = Cancelloan::where('loan_id', $loan->uid)->get();
        if (count($cancel) == 1) {

            if ($cancel[0]->user_id == $user->id) {
                $data['cancel'] = 'self';
            } else {
                $data['cancel'] = 'client';
            }
        } elseif (count($cancel) == 2) {
            if ($loan->user_id == $user->id) {
                $data['cancel'] = 'withdraw';
            } else {
                $data['cancel'] = 'client-withdraw';
            }
        } else {
            $data['cancel'] = 'any';
        }
        //  dd($data);

        if ($user->id == $loan->user_id || $user->id == $loan->client_id) {
            return view('dashboard.loandetails', $data);
        } else {
            return redirect()->route('/dashboard')->with('error', 'Access Denied!');
        }
    }

    public function marksent($id)
    {
        $loan = loan::where('uid', $id)->first();

        // Error handling: Check if $loan is not null
        if (!$loan) {
            return redirect()->back()->with('error', 'loan not found!');
        }
        $user = Auth::user();
        if ($user->id == $loan->user_id || $user->id == $loan->client_id) {
            $loan->status = 2;
            $loan->save();
            $title = "loan Sent";
            $details = "Product : " . $loan->product_name . " (" . $loan->reference . ") Amount :" . $loan->totalamount;
            $this->create_activity($loan->uid, $user->id, $title, $details, 2);
            return redirect()->back()->with('message', 'loan has been marked sent to your client. Once your client approve the receipient of loan, you can then withdraw your funds!');
        } else {
            return redirect()->route('/dashboard')->with('error', 'Access Denied!');
        }
    }
    public function withdraw($id)
    {
        $loan = loan::where('uid', $id)->first();
        $user = Auth::user();
        $data['active'] = 'withdraw';


        // Error handling: Check if $loan is not null
        if (!$loan) {
            return redirect()->back()->with('error', 'loan not found!');
        }
        $checkcancel = Cancelloan::where('loan_id', $loan->uid)->count();

        if ($checkcancel == 2) {
            if ($loan->user_id == $user->id) {
                $data['loan'] = $loan;
                $data['user'] = $user;
                return view('dashboard.withdraw', $data);
            }
        } elseif ($loan->status == 3) {
            // dd($loan, $user);

            if ($loan->client_id == $user->id) {
                $data['loan'] = $loan;
                $data['user'] = $user;

                return view('dashboard.withdraw', $data);
            }
        } else {

            return redirect()->back()->with('message', 'Access Denied, loan Lack Withdrawer Permission!');
        }
    }
    public function markreceived($id)
    {
        $loan = loan::where('uid', $id)->first();

        // Error handling: Check if $loan is not null
        if (!$loan) {
            return redirect()->back()->with('error', 'loan not found!');
        }
        $user = Auth::user();
        if ($user->id == $loan->user_id || $user->id == $loan->client_id) {

            $loan->status = 3;
            $loan->save();
            $title = "loan Received";
            $details = "Product : " . $loan->product_name . " (" . $loan->reference . ") Amount :" . $loan->totalamount;
            $this->create_activity($loan->uid, $user->id, $title, $details, 3);
            return redirect()->back()->with('message', 'loan has been marked received. Your client can now withdraw funds!');
        } else {
            return redirect()->route('/dashboard')->with('error', 'Access Denied!');
        }
    }


    public function cancelloan($id)
    {
        $loan = loan::where('uid', $id)->first();

        // Error handling: Check if $loan is not null
        if (!$loan) {
            return redirect()->back()->with('error', 'loan not found!');
        }

        $user = Auth::user();

        if ($user->id == $loan->user_id || $user->id == $loan->client_id) {
            $cancel = Cancelloan::where('user_id', $user->id)->where('loan_id', $loan->uid)->get();

            if (count($cancel) >= 1) {
                if ($cancel[0]->user_id == $user->id) {
                    return redirect()->back()->with('message', 'loan Cancelled, waiting for the approval of your client!');
                } else {
                    $title = "loan Cancellation Approved";
                    $details = "Product : " . $loan->product_name .  " (" . $loan->reference . ") Amount :" . $loan->totalamount;
                    $this->create_activity($loan->uid, $user->id, $title, $details, 4);

                    Cancelloan::create(['loan_id' => $loan->uid, 'user_id' => $user->id]);
                    return redirect()->back()->with('message', 'loan Cancelled, loan creator can now withdraw funds!');
                }
            }

            Cancelloan::create(['loan_id' => $loan->uid, 'user_id' => $user->id]);
            $title = "loan Canceled";
            $details = "Product : " . $loan->product_name .  " (" . $loan->reference . ") Amount :" . $loan->totalamount;
            $this->create_activity($loan->uid, $user->id, $title, $details, 4);
            return redirect()->back()->with('message', 'loan Cancelled, waiting for the approval of your client!');
        } else {
            // Corrected redirect route
            return redirect()->route('dashboard')->with('error', 'Access Denied!');
        }
    }

    public function uncancelloan($id)
    {
        $loan = loan::where('uid', $id)->first();

        // Error handling: Check if $loan is not null
        if (!$loan) {
            return redirect()->back()->with('error', 'loan not found!');
        }

        $user = Auth::user();

        if ($user->id == $loan->user_id || $user->id == $loan->client_id) {
            $cancel = Cancelloan::where('user_id', $user->id)->where('loan_id', $loan->uid)->get();

            if (count($cancel) >= 1) {

                $title = "loan Uncancelled";
                $details = "Product : " . $loan->product_name .  " (" . $loan->reference . ") Amount :" . $loan->totalamount;
                $this->create_activity($loan->uid, $user->id, $title, $details, 5);
                Cancelloan::where('loan_id', $loan->uid)->where('user_id', $user->id)->delete();

                return redirect()->back()->with('message', 'loan uncancelled.');
            }

            // Cancelloan::where('loan_id', $loan->uid)->where('user_id', $user->id)->delete();

            // $title = "loan ". $loan->reference. " uncanceled";
            // $details = "Product : ".$loan->product_name. " Amount :". $loan->totalamount;
            // $this->create_activity($loan->uid, $user->id,$title, $details,5);
            return redirect()->back()->with('message', 'loan Uncancelled, waiting for the approval of your client!');
        } else {
            // Corrected redirect route
            return redirect()->route('dashboard')->with('error', 'Access Denied!');
        }
    }


    public function deleteloan($id)
    {
        $loan = loan::where('uid', $id)->first();
        $user = Auth::user();

        if ($loan->user_id == $user->id) {
            $title = "loan Deleted";
            $details = "Product : " . $loan->product_name .  " (" . $loan->reference . ") Amount :" . $loan->totalamount;
            $this->create_activity($loan->uid, $user->id, $title, $details, 5);
            $loan->delete();
            return redirect()->back()->with('message', 'loan Deleted Successfully!');
        } else {
            return redirect()->back()->with('error', 'Access Denied!');
        }
    }
}
