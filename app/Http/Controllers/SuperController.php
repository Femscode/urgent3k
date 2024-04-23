<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Data;
use App\Models\Loan;
use App\Models\User;
use App\Models\Cable;
use App\Models\GiveAway;
use App\Models\Interest;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ScheduleAccount;
use App\Traits\TransactionTrait;
use Illuminate\Support\Facades\DB;
use App\Models\DuplicateTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SuperController extends Controller
{
    use TransactionTrait;
    public function index()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';
        $data['users'] = User::latest()->get();
        $data['transactions'] = Transaction::latest()->take(100)->get();
        $data['loans'] = Loan::latest()->take(100)->get();

        return view('super.index', $data);
    }
    public function transactions()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';
        $data['users'] = User::latest()->get();
        $data['transactions'] = Transaction::latest()->take(100)->get();
        $data['loans'] = Loan::latest()->take(100)->get();

        return view('super.alltransactions', $data);
    }
    public function allloans()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';
        $data['users'] = User::latest()->get();
        $data['transactions'] = Transaction::latest()->take(100)->get();
        $data['loans'] = Loan::latest()->take(100)->get();

        return view('super.allloans', $data);
    }

    public function pendingloans()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';
        $data['users'] = User::latest()->get();
        $data['transactions'] = Transaction::latest()->take(100)->get();
        $data['loans'] = Loan::where('status', 2)->latest()->take(100)->get();

        return view('super.allloans', $data);
    }
    public function rejectedloans()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';
        $data['users'] = User::latest()->get();
        $data['transactions'] = Transaction::latest()->take(100)->get();
        $data['loans'] = Loan::where('status', 0)->latest()->take(100)->get();

        return view('super.allloans', $data);
    }
    public function approvedloans()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }


        // Inside your controller method
        $loans = Loan::where('status', 1)->oldest()->take(100)->get();

        // Calculate day difference for each loan
        $loans->each(function ($loan) {
            $createdDate = new DateTime($loan->created_at);
            $currentDate = new DateTime();
            $interval = $currentDate->diff($createdDate);
            $dayDifference = $interval->days;

            // Add dayDifference property to the loan object
            $loan->dayDifference = $dayDifference;
        });


        $data['active'] = 'super';
        $data['users'] = User::latest()->get();
        $data['transactions'] = Transaction::latest()->take(100)->get();
        $data['loans'] = $loans;

        return view('super.approvedloans', $data);
    }
    public function paidloans()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';
        $data['users'] = User::latest()->get();
        $data['transactions'] = Transaction::latest()->take(100)->get();
        $data['loans'] = Loan::where('status', 3)->latest()->take(100)->get();

        return view('super.allloans', $data);
    }
    public function allusers()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';
        $data['users'] = User::latest()->get();
        $data['transactions'] = Transaction::latest()->take(100)->get();
        $data['loans'] = Loan::latest()->take(100)->get();

        return view('super.allusers', $data);
    }

    public function data_price()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';
        $data['datas'] = Data::where('user_id', 0)->latest()->orderBy('network')->get();

        return view('super.data_price', $data);
    }

    public function schedule_accounts()
    {
        $schedules = ScheduleAccount::get();
        dd($schedules);
    }
    public function admin_giveaway()
    {
        $data['user'] = $user = Auth::user();
        if ($user->email == 'fasanyafemi@gmail.com') {
            $data['giveaways'] = GiveAway::latest()->get();
            $data['active'] = 'giveaway';

            return view('super.giveaway', $data);
        } else {
            return redirect()->back()->with('message', 'Access Denied');
        }
    }
    public function plan_status()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';
        $data['mtn_sme'] = Data::where('user_id', 0)->where('type', 'SME')->where('network', 1)->first();
        $data['mtn_cg'] = Data::where('user_id', 0)->where('type', 'cg')->where('network', 1)->first();
        $data['mtn_cg_lite'] = Data::where('user_id', 0)->where('type', 'cg_lite')->where('network', 1)->first();
        $data['mtn_direct'] = Data::where('user_id', 0)->where('type', 'direct')->where('network', 1)->first();

        $data['glo_sme'] = Data::where('user_id', 0)->where('type', 'SME')->where('network', 2)->first();

        $data['glo_cg'] = Data::where('user_id', 0)->where('type', 'cg')->where('network', 2)->first();
        $data['glo_cg_lite'] = Data::where('user_id', 0)->where('type', 'cg_lite')->where('network', 2)->first();
        $data['glo_direct'] = Data::where('user_id', 0)->where('type', 'direct')->where('network', 2)->first();

        $data['airtel_sme'] = Data::where('user_id', 0)->where('type', 'SME')->where('network', 3)->first();
        $data['airtel_cg'] = Data::where('user_id', 0)->where('type', 'cg')->where('network', 3)->first();
        $data['airtel_cg_lite'] = Data::where('user_id', 0)->where('type', 'cg_lite')->where('network', 3)->first();
        $data['airtel_direct'] = Data::where('user_id', 0)->where('type', 'direct')->where('network', 3)->first();

        $data['nmobile_sme'] = Data::where('user_id', 0)->where('type', 'SME')->where('network', 4)->first();
        $data['nmobile_cg'] = Data::where('user_id', 0)->where('type', 'cg')->where('network', 4)->first();
        $data['nmobile_cg_lite'] = Data::where('user_id', 0)->where('type', 'cg_lite')->where('network', 4)->first();
        $data['nmobile_direct'] = Data::where('user_id', 0)->where('type', 'direct')->where('network', 4)->first();


        return view('super.plan_status', $data);
    }
    public function update_plan_status($network_id, $type)
    {
        // dd($network_id, $type);
        if (Data::where('network', $network_id)->where('type', $type)->first()->status == 0) {
            $datas = Data::where('network', $network_id)->where('type', $type)->update([
                'status' => 1
            ]);
        } else {
            $datas = Data::where('network', $network_id)->where('type', $type)->update([
                'status' => 0
            ]);
        }
        // $datas = Data::where('network',$network_id)->where('type',$type)->update([
        //     'status' => DB::raw('NOT status')
        // ]);
        return redirect()->back()->with('message', 'Status Updated Successfully');
    }
    public function update_data(Request $request)
    {
        // dd($request->all());

        $datas = Data::where('plan_id', $request->plan_id)
            ->where('user_id', '!=', 888)
            ->get();
        foreach ($datas as $data) {
            $data->plan_name = $request->plan_name;
            $data->actual_price = $request->actual_price;
            $data->data_price = $request->data_price;
            $data->account_price = $request->account_price;
            $data->admin_price = $request->account_price;
            $data->save();
        }

        return true;
    }

    public function cable_price()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';
        $data['cables'] = Cable::where('user_id', 0)->latest()->get();
        return view('super.cable_price', $data);
    }
    public function update_cable(Request $request)
    {
        $cables = Cable::where('plan_id', $request->plan_id)
            ->where('user_id', '!=', 888)
            ->get();
        foreach ($cables as $cable) {
            $cable->plan_name = $request->plan_name;
            $cable->actual_price = $request->actual_price;
            $cable->real_price = $request->real_price;
            $cable->save();
        }

        return true;
    }
    public function payment_transactions()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';
        $data['payments'] = Transaction::where('title', 'Account Funding')
            ->orWhere('title', 'Fund Transfer')
            ->orWhere('title', 'Payment Received')
            ->orWhere('title', 'Funds Withdraw')
            ->latest()->take(100)->get();
        return view('super.payment_transactions', $data);
    }
    public function all_withdrawals()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'withdrawal';
        $data['payments'] = Transaction::where('title', 'Funds Withdraw')

            ->latest()->get();
        return view('super.withdrawal', $data);
    }
    public function approve_loan($id)
    {

        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $loan = $tranx = Loan::where('uid', $id)->firstOrFail();
        $loan->status = 1;
        $loan->save();
        $reference = 'LNS-' . Str::random(5);

        $details = "Loan (".$reference.") Approved. Amount : ₦" . $tranx->amount;
        $this->create_transaction('Loan Approved', $reference, $details, 'none', $tranx->amount, $tranx->user_id,  0);



        $client = User::where('id', $loan->user_id)->firstOrFail();

        $client->point += 1.5;
        $client->fund = 0;
        $client->borrowed = $loan->totalamount;
        $client->save();


        return redirect()->back()->with('message', 'Loan Withdrawal Approved!');
    }
    public function revert_loan($id)
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }

        $tranx = Loan::where('uid', $id)->firstOrFail();
        $reference = 'LND-' . Str::random(5);

        $details = "Loan (".$reference.") Disapproved. Amount : ₦" . $tranx->amount;
        $this->create_transaction('Loan Dissaproved', $reference, $details, 'none', $tranx->amount, $tranx->user_id,  0);

        $client = User::where('id', $tranx->user_id)->firstOrFail();


        $client->borrowed = 0;
        $client->fund = $tranx->amount;
        $client->save();

        $tranx->status = 0;
        $tranx->save();
        return redirect()->back()->with('message', 'Loan Dissapproved!');
    }

    public function user_management()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['allusers'] =  User::count();;
        $data['users'] = User::latest()->take(200)->get();
        // $data['users'] = User::latest()->get();
        $data['active'] = 'super';

        return view('super.user_management', $data);
    }
    public function user_transaction($id)
    {
        $data['user'] =  $user = User::where('uuid', $id)->first();
        // dd($user);

        $data['transactions'] = Transaction::where('user_id', $user->id)
            // ->where('title', 'Data Purchase')
            // ->orWhere('title', 'Airtime Purchase')
            // ->orWhere('title', 'Cable Subscription')
            // ->orWhere('title', 'Electricity Payment')
            ->latest()->get();
        $data['active'] = 'super';

        return view('super.index', $data);
    }
    public function block_user($id)
    {
        $data['user'] =  $user = User::where('uuid', $id)->first();

        if ($user) {
            if ($user->block == 1) {
                $user->block = 0;
                $user->save();
                return redirect()->back()->with('message', "User Unblocked Successfully!");
            } else {
                $user->block = 1;
                $user->save();
                return redirect()->back()->with('message', "User Blocked Successfully!");
            }
        }
    }
    public function duplicate_transactions()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://easyaccessapi.com.ng/api/wallet_balance.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "AuthorizationToken: " . env("EASY_ACCESS_AUTH"), //replace this with your authorization_token
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response_json = json_decode($response, true);
        $data['easy_balance'] = $response_json['balance'];
        $data['duplicate_transactions'] = DuplicateTransaction::latest()->get();

        return view('super.duplicate_transactions', $data);
    }
    public function contact_gain()
    {
        $data['user'] = $user =  Auth::user();
        if ($user->email !== 'fasanyafemi@gmail.com') {
            return redirect()->route('dashboard');
        }
        $data['active'] = 'super';

        return view('super.contact_gain', $data);
    }
    public function downloadCSV(Request $request)
    {
        // dd($request->all());
        // $users = User::where('created_at', '>', $request->from)->where('created_at', '<', $request->to)->get(['name', 'phone']);

        $users = User::where('created_at', '>', $request->from)
            ->where('created_at', '<', $request->to)
            ->where(function ($query) use ($request) {
                $query->where('company_id', 5)
                    ->orWhere('company_id', '=', DB::raw('id'));
            })
            ->select([
                DB::raw("CONCAT('$request->prefix ', name) as name"),
                'phone',
            ])
            ->get();




        // $users = User::where('created_at', '>', $request->from)
        //     ->where('created_at', '<', $request->to)
        //     ->where('company_id', 5)
        //     ->where('company_id', '!=', 'id')
        //     ->select([
        //         DB::raw("CONCAT('$request->prefix ', name) as name"),
        //         'phone'
        //     ])
        //     ->get();

        $filename = Carbon::now()->format('d-m-Y') . '_users_data.csv';

        // Set the content type and headers for file download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        // Open a file handle for PHP's output stream
        $handle = fopen('php://output', 'w');

        // Insert the header
        fputcsv($handle, ['Name', 'Phone']);

        // Insert the user data
        foreach ($users as $user) {
            fputcsv($handle, [$user->name, $user->phone]);
        }

        // Close the file handle
        fclose($handle);
        exit;
    }
    public function upgrade_user($id)
    {

        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $data['user'] =  $user = User::where('uuid', $id)->first();
            // dd($user);

            if ($user) {
                $datas = Data::where('user_id', $user->company_id)->get();
                $real_data = Data::where('user_id', 0)->get();
                if ($user->upgrade == 1) {
                    //update the user's data prices
                    $user->company_id = 5;
                    $user->save();


                    foreach ($datas as $data) {
                        // Get the corresponding $real_data with the same plan_id 
                        $matchingRealData = $real_data->first(function ($realData) use ($data) {
                            return $realData->plan_id === $data->plan_id;
                        });

                        if ($matchingRealData) {
                            // Update the data_price of $data with the account_price of $matchingRealData
                            $data->data_price = $matchingRealData->account_price;
                            $data->save();
                        }
                    }
                    $user->upgrade = 0;
                    $user->save();
                    return redirect()->back()->with('message', "User Degraded Successfully!");
                } else {
                    //update the user's data prices
                    $user->company_id = $user->id;
                    $user->save();

                    foreach ($datas as $data) {
                        // Get the corresponding $real_data with the same plan_id
                        $matchingRealData = $real_data->first(function ($realData) use ($data) {
                            return $realData->plan_id === $data->plan_id;
                        });
                        if ($matchingRealData) {
                            // Update the data_price of $data with the account_price of $matchingRealData
                            $data->data_price = $matchingRealData->data_price;
                            $data->save();
                        }
                    }
                    $user->upgrade = 1;
                    $user->save();
                    return redirect()->back()->with('message', "User Upgraded Successfully!");
                }
            }
        } else {
            return "Access Denied";
        }
    }
    public function sendreminder()
    {
        $loans = Loan::where('status', 1)->get();

        // Calculate day difference for each loan
        $loans->each(function ($loan) {
            $createdDate = new DateTime($loan->created_at);
            $currentDate = new DateTime();
            $interval = $currentDate->diff($createdDate);
            $dayDifference = $interval->days;
            $name = $loan->user->name;
            $email = $loan->user->email;
            $ref = $loan->ref;
            $loan->dayDifference = $dayDifference;

            if ($loan->dayDifference > 5) {

                $days =  $loan->dayDifference - 5;
                $data = array('name' => $name, 'ref' => $ref, 'email' => $email, 'loan' => $loan, 'days' => $days);

                Mail::send('mail.overduereminder', $data, function ($message) use ($email) {
                    $message->to($email)->subject('Loan Payment Reminder!');
                    $message->from('info@urgent3k.com', 'URGENT3K');
                });
            } else {

                $days = 5 - $loan->dayDifference;
                $data = array('name' => $name, 'ref' => $ref, 'email' => $email, 'loan' => $loan, 'days' => $days);

                Mail::send('mail.reminder', $data, function ($message) use ($email) {
                    $message->to($email)->subject('Loan Payment Reminder!');
                    $message->from('info@urgent3k.com', 'URGENT3K');
                });
            }
        });
        return redirect()->back()->with('message',"Reminder sent successfully!");

        dd($loans);
    }

    public function addinterest()
    {
        $loans = Loan::where('status', 1)->get();
      

        // Calculate day difference for each loan
        $loans->each(function ($loan) {
            $createdDate = new DateTime($loan->created_at);
            $currentDate = new DateTime();
            $interval = $currentDate->diff($createdDate);
            $dayDifference = $interval->days;
            $name = $loan->user->name;
            $email = $loan->user->email;
            $ref = $loan->ref;
            $loan->dayDifference = $dayDifference;
           
            if ($loan->dayDifference > 5) {
                $before =  $loan->totalamount;
                $interest = 0.02 * $loan->amount;

                $days =  $loan->dayDifference - 5;
                $loan->totalamount += $interest;
                $loan->update(['totalamount' =>  $loan->totalamount]);
                Interest::create([
                    'userId' => $loan->user_id,
                    'loanId' => $loan->uid,
                    'interest' => $interest,
                    'before' => $before,
                    'after' => $loan->totalamount,
                ]);
            } 
        });
        return redirect()->back()->with('message',"Reminder sent successfully!");

    }
    public function markpaid($id) {
        $loan =  Loan::where('uid', $id)->firstOrFail();
        $client = User::find($loan->user_id);
        // dd($loan,$client);
        $reference = 'LNP-' . Str::random(5);

        $details = "Loan (".$loan->reference.") Paid. Amount : ₦" . $loan->totalamount;
        $this->create_transaction('Loan Paid', $reference, $details, 'none', $loan->totalamount, $loan->user_id,  3);

        
        $client->point += 1.5;
        $client->borrowed = 0;
        $client->fund = $loan->totalamount;
        $client->save();

        $loan->status = 3;
        $loan->save();

        return redirect()->back()->with('message',"Loan mark piad successfully!");

    }
}
