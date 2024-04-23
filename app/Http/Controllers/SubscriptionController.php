<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Data;
use App\Models\User;
use App\Models\Cable;
use App\Models\Airtime;
use App\Models\DataGroup;
use App\Models\ComingSoon;
use App\Models\Beneficiary;
use App\Models\Electricity;
use App\Models\Examination;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Models\AirtimeGroup;
use App\Models\ContactGroup;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\DataRecipient;
use Flutterwave\Transactions;
use App\Models\AirtimeRecipient;
use App\Models\SchedulePurchase;
use App\Traits\TransactionTrait;
use App\Models\DuplicateTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{
    use TransactionTrait;

    public function data()
    {
        $data['user'] = $user = Auth::user();
        $datas = Data::where('user_id', 0)->get();
        $check_data = Data::where('user_id', $user->id)->first();
        // Data::where('user_id', $user->id)->delete();
        // dd($check_data,$datas[0]);
        if ($user->upgrade == 0) {
            if (!$check_data) {
                foreach ($datas as $data) {
                    Data::create([
                        'user_id' => $user->id,
                        'network' => $data->network,
                        'plan_id' => $data->plan_id,
                        'plan_name' => $data->plan_name,
                        'actual_price' => $data->actual_price,
                        'data_price' => $data->account_price,
                        'account_price' => $data->account_price,
                        'admin_price' => $data->account_price
                    ]);
                }
            }
        } else {
            if (!$check_data) {
                foreach ($datas as $data) {
                    Data::create([
                        'user_id' => $user->id,
                        'network' => $data->network,
                        'plan_id' => $data->plan_id,
                        'plan_name' => $data->plan_name,
                        'actual_price' => $data->actual_price,
                        'data_price' => $data->data_price,
                        'account_price' => $data->data_price,
                        'admin_price' => $data->data_price
                    ]);
                }
            }
        }


        $data['user'] = $user = Auth::user();
        $data['active'] = 'data';
        $data['company'] = User::where('id', $user->company_id)->first();
        $data['beneficiaries'] = Beneficiary::where('user_id', $user->id)->latest()->get();
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Data Notification')->first();
        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }

        return response()->view('subscription.buydata', $data);
    }
    public function admin_data()
    {

        $data['user'] = $user = Auth::user();
        if ($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/premium-data');
        }
        $data['active'] = 'data';
        $data['company'] = User::where('id', $user->company_id)->first();
        $data['beneficiaries'] = Beneficiary::where('user_id', $user->id)->latest()->get();
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Data Notification')->first();
        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }

        return view('business_backend.buydata', $data);
    }
    public function user_delete_duplicate()
    {
        $user = Auth::user();
        // dd($user);
        $duplicate = DuplicateTransaction::where('user_id', $user->id)->first();
        $tranx =  Transaction::create([
            'user_id' => $user->id,
            'title' => $duplicate->title,
            'reference' => 'data_purchase_' . Str::random(5),
            'description' => $duplicate->details,
            'before' => $user->balance,
            'type' => 'debit',
            'amount' => $duplicate->amount,
            'status' => 1
        ]);
        $user->balance -= $duplicate->amount;
        $user->total_spent += $duplicate->amount;
        $user->save();
        $tranx->after = $user->balance;
        $tranx->save();
        //delete duplicate
        $duplicate->delete();
        return true;
        dd($duplicate);
    }
    public function admin_delete_duplicate($type, $tranx_id)
    {
        $duplicate = DuplicateTransaction::find($tranx_id);
        $user = User::find($duplicate->user_id);
        // dd($user, $type,$duplicate);
        if (Auth::user()->id == $user->id || Auth::user()->email == 'fasanyafemi@gmail.com') {


            if ($type == 'confirm') {
                // dd($user);
                $tranx =  Transaction::create([
                    'user_id' => $user->id,
                    'title' => $duplicate->title,
                    'reference' => 'resolve_pending_' . Str::random(5),
                    'description' => $duplicate->details,
                    'before' => $user->balance,
                    'type' => 'debit',
                    'amount' => $duplicate->amount,
                    'status' => 1
                ]);
                $user->balance -= $duplicate->amount;
                $user->total_spent += $duplicate->amount;
                $user->save();
                $tranx->after = $user->balance;
                $tranx->save();
                //delete duplicate
                $duplicate->delete();
                return redirect()->back()->with('message', 'Duplicate confirmed successfully!');
                return true;
            } else {
                if (Auth::user()->email == 'fasanyafemi@gmail.com') {
                    $duplicate->delete();
                    return redirect()->back()->with('message', 'Duplicate deleted successfully!');
                } else {
                    return redirect()->back()->with('message', 'Access Denied!');
                }
            }
        } else {
            return redirect()->back()->with('message', 'Access Denied');
        }
    }
    public function buydata(Request $request)
    {


        $user = Auth::user();
        $company = User::where('id', $user->company_id)->first();

        $phone_number = $request->phone_number;
        if (strlen($request->phone_number) == 10) {
            $phone_number = "0" . $request->phone_number;
        }
        $hashed_pin = hash('sha256', $request->pin);
        if ($user->pin !== $hashed_pin) {
            $response = [
                'success' => false,
                'message' => 'Incorrect Pin!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }
        // dd($request->all());
        if ($request->has('selectedDate')) {
            $reference = "schedule_purchase_data_" . Str::random(5);
            $data = Data::where('user_id', $user->company_id)->where('plan_id', $request->plan)->where('network', $request->network)->first();
            $data_price =  $data->admin_price;

            $details = "Data Purchase of " . $data->data_price . " on " . $request->phone_number;
            $schedule_transaction = $this->create_schedule_transaction(
                'Data Purchase',
                $reference,
                $details,
                $user->id,
                $request->phone_number,
                $request->network,
                $request->plan,
                $data_price,

            );
            $schedule = $this->create_later_purchase(
                'Data Purchase',
                $reference,
                $details,
                $user->id,
                $request->phone_number,
                $request->network,
                $request->plan,
                $data_price,
                $request->selectedDate,
                $request->selectedTime,
                $schedule_transaction
            );


            return "schedule_saved";
        }
        // dd($request->all());
        $data = Data::where('user_id', $user->company_id)->where('plan_id', $request->plan)->where('network', $request->network)->first();
        $data_price =  $data->admin_price;
        $real_dataprice = $data->data_price;
        if ($data == null) {
            $response = [
                'success' => false,
                'message' => 'Invalid Plan!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }
        //check balance
        if ($user->balance < $data_price) {
            $response = [
                'success' => false,
                'message' => 'Insufficient balance for the plan you want to get!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }
        // dd($request->all(),$data_price, $real_dataprice, env('EASY_ACCESS_AUTH'));

        //check duplicate
        if ($data->network == 1) {
            $network = 'MTN';
        } elseif ($data->network == 2) {
            $network = 'GLO';
        } elseif ($data->network == 3) {
            $network = "Airtel";
        } else {
            $network = "9Mobile";
        }
        $details = $network . "Data Purchase of " . $data->plan_name . " on " . $request->phone_number;
        $client_reference =  'buy_data_' . Str::random(7);
        $check = $this->check_duplicate('check', $user->id, $data_price, "Data Purchase", $details, $client_reference);

        if ($check[0] == true) {
            $response = [
                'type' => 'duplicate',
                'success' => false,
                'message' => 'Please confirm the success of ' . $check[1]->details . ' before resuming service usage.',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }
        // dd($check);
        //purchase the data
        //just to replace env
        $trans_id = $this->create_transaction('Data Purchase', $client_reference, $details, 'debit', $data_price, $user->id, 3, $real_dataprice, $phone_number, $request->network, $request->plan);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://easyaccessapi.com.ng/api/data.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'network' => $request->network,
                'mobileno' => $phone_number,
                'dataplan' => $request->plan,
                'client_reference' => $client_reference, //update this on your script to receive webhook notifications
            ),
            CURLOPT_HTTPHEADER => array(
                "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        $response_json = json_decode($response, true);
        // return [$response_json,env('EASY_ACCESS_AUTH')];


        curl_close($curl);
        return $response;
    }

    private function handle_buy_data($phone, $network, $plan_id, $group_id = null)
    {
        // dd($phone, $network, $plan_id);
        $user = Auth::user();
        $company = User::where('id', $user->company_id)->first();

        $phone_number = $phone;
        if (strlen($phone) == 10) {
            $phone_number = "0" . $phone;
        }

        $data = Data::where('user_id', $user->company_id)->where('plan_id', $plan_id)->where('network', $network)->first();
        $data_price =  $data->admin_price;
        $real_dataprice = $data->data_price;
        if ($data == null) {
            $response = [
                'success' => false,
                'message' => 'Invalid Plan!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }
        //check balance
        if ($user->balance < $data_price) {
            $response = [
                'success' => false,
                'message' => 'Insufficient balance for the plan you want to get!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }
        // dd($request->all(),$data_price, $real_dataprice, env('EASY_ACCESS_AUTH'));
        if ($data->network == 1) {
            $network_mi = 'MTN';
        } elseif ($data->network == 2) {
            $network_mi = 'GLO';
        } elseif ($data->network == 3) {
            $network_mi = "Airtel";
        } else {
            $network_mi = "9Mobile";
        }
        $details = $network_mi . " Data Purchase of " . $data->plan_name . " on " . $phone;
        $client_reference =  'buy_data_' . Str::random(7);

        $check = $this->check_duplicate('check', $user->id, $data->data_price, "Data Purchase", $details, $client_reference);

        if ($check[0] == true) {
            $response = [
                'type' => 'duplicate',
                'success' => false,
                'message' => 'Please confirm the success of ' . $check[1]->details . ' before resuming service usage.',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }

        //purchase the data
        $trans_id = $this->create_transaction('Data Purchase', $client_reference, $details, 'debit', $data_price, $user->id, 3, $real_dataprice);
        $transaction = Transaction::find($trans_id);
        $transaction->group_id = $group_id;
        $transaction->save();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://easyaccessapi.com.ng/api/data.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'network' => $network,
                'mobileno' => $phone_number,
                'dataplan' => $plan_id,
                'client_reference' => $client_reference, //update this on your script to receive webhook notifications
            ),
            CURLOPT_HTTPHEADER => array(
                "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        $response_json = json_decode($response, true);
        curl_close($curl);
        return $response_json;
    }

    public function run_schedule_purchase()
    {
        // dd($request->all());
        $currentDate = Carbon::now()->toDateString();
        $currentTime = Carbon::now()->toTimeString();


        $schedules = SchedulePurchase::where('status', 0)
            ->whereDate('date', $currentDate)
            ->whereTime('time', '>=', Carbon::parse($currentTime)->subMinutes(35))
            ->whereTime('time', '<=', $currentTime)
            ->get();
        // dd($schedules);
        foreach ($schedules as $schedule) {
            $tranx = Transaction::find($schedule->transaction_id);
            $user = User::find($tranx->user_id);
            if ($schedule->title == 'Data Purchase') {
                $data = Data::where('user_id', $user->company_id)->where('plan_id', $tranx->plan_id)->where('network', $tranx->network)->first();
                // dd($data);
                if ($data == null) {
                    $tranx->status = 0;
                    $tranx->save();
                    $schedule->status = 2;
                    $schedule->save();
                    //in the future, there should be a mail notification here
                    return false;
                }
                $data_price =  $data->admin_price;
                $real_dataprice = $data->data_price;
                if ($user->balance < $data_price) {
                    $tranx->status = 0;
                    $tranx->save();
                    $schedule->status = 2;
                    $schedule->save();
                    //in the future, there should be a mail notification here
                    return false;
                }

                if ($data->network == 1) {
                    $network = 'MTN';
                } elseif ($data->network == 2) {
                    $network = 'GLO';
                } elseif ($data->network == 3) {
                    $network = "Airtel";
                } else {
                    $network = "9Mobile";
                }

                $details = $network . " Data Purchase of " . $data->plan_name . " on " . $tranx->phone_number;
                $client_reference =  'buy_data_' . Str::random(7);

                $check = $this->check_duplicate('check', $user->id, $data->data_price, "Data Purchase", $details, $client_reference);

                if ($check[0] == true) {
                    $tranx->status = 0;
                    $tranx->save();
                    $schedule->status = 2;
                    $schedule->save();

                    return false;
                }

                $trans_id = $this->create_transaction('Data Purchase', $client_reference, $details, 'debit', $data_price, $user->id, 2, $real_dataprice, $tranx->phone_number, $tranx->network, $tranx->plan_id);

                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://easyaccessapi.com.ng/api/data.php",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => array(
                        'network' => $tranx->network,
                        'mobileno' => $tranx->phone_number,
                        'dataplan' => $tranx->plan_id,
                        'client_reference' => $client_reference, //update this on your script to receive webhook notifications
                    ),
                    CURLOPT_HTTPHEADER => array(
                        "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                        "cache-control: no-cache"
                    ),
                ));
                $schedule->status = 1;
                $schedule->save();
                $tranx->delete();
                $response = curl_exec($curl);
                curl_close($curl);
                return true;
            } elseif ($schedule->title == 'Airtime Purchase') {
                $phone_number = $tranx->phone_number;
                $actual_price = Airtime::where('user_id', $user->company_id)->where('network', $tranx->network)->first()->actual_price;
                $real_airtimeprice = $tranx->real_amount - ($actual_price / 100) * $tranx->real_amount;
                if ($user->balance < $tranx->amount) {
                    $tranx->status = 0;
                    $tranx->save();
                    $schedule->status = 2;
                    $schedule->save();
                    //in the future, there should be a mail notification here
                    return false;
                }
                $details =  "Airtime Purchase of " . $tranx->amount . " on " . $tranx->phone_number;
                $client_reference =  'buy_airtime_' . Str::random(7);
                $check = $this->check_duplicate('check', $user->id, $tranx->amount, "Airtime Purchase", $details, $client_reference);

                if ($check[0] == true) {
                    $tranx->status = 0;
                    $tranx->save();
                    $schedule->status = 2;
                    $schedule->save();
                    return false;
                }

                $trans_id = $this->create_transaction('Airtime Purchase', $client_reference, $details, 'debit', $tranx->discounted_amount, $user->id, 1, $real_airtimeprice, $phone_number, $tranx->network, $tranx->real_amount);

                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://easyaccessapi.com.ng/api/airtime.php",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => array(
                        'network' => $tranx->network,
                        'mobileno' => $phone_number,
                        'amount' => $tranx->amount,
                        'airtime_type' => 001,
                        'client_reference' => $client_reference, //update this on your script to receive webhook notifications
                    ),
                    CURLOPT_HTTPHEADER => array(
                        "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                        "cache-control: no-cache"
                    ),
                ));
                $response = curl_exec($curl);
                $schedule->status = 1;
                $schedule->save();
                $tranx->delete;

                curl_close($curl);
                return true;
            } else {
                $tranx->status = 0;
                $tranx->save();
                $schedule->status = 2;
                $schedule->save();
                //in the future, there should be a mail notification here
                return false;
            }
        }
    }

    public function admin_rechargeGroup(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $hashed_pin = hash('sha256', $request->pin);
        if ($user->pin !== $hashed_pin) {
            $response = [
                'success' => false,
                'message' => 'Incorrect Pin!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }
        $group = DataGroup::where('uid', $request->group_id)->first();
        $recipients = DataRecipient::where('group_id', $group->id)->get();
        $total_amount = $recipients->sum('amount');
        if ($total_amount > $user->balance) {
            $response = [
                'success' => false,
                'message' => 'Insufficient balance to process transaction!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }


        $purchase_status = [];
        foreach ($recipients as $reci) {
            $response = $this->handle_buy_data($reci->phone, $reci->network, $reci->plan_id, $request->group_id);
            // dd($reci, $response);
            if (is_object($response) && method_exists($response, 'getData')) {
                $responseData = $response->getData();

                if (is_object($responseData) && property_exists($responseData, 'success') && $responseData->success === false) {
                    if (!is_object($response) || !property_exists($responseData, 'type') || $responseData->type === 'duplicate') {
                        $response = [
                            'success' => false,
                            'message' => 'Please kindly clear your pending transactions before proceeding',
                            'auto_refund_status' => 'Nil',
                            'data' => $purchase_status,
                        ];
                        return response()->json($response);
                    }
                }
            }

            array_push($purchase_status, $response);
        }
        $response = [
            'success' => true,
            'message' => 'Purchase Successful! Check group transaction table to confirm. ',
            'auto_refund_status' => 'Nil',
            'data' => $purchase_status,
        ];

        return response()->json($response);
        // return [$purchase_status,true];

        return redirect()->back()->with('message', 'Transaction Successful!');
    }
    public function admin_rechargeAirtimeGroup(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $hashed_pin = hash('sha256', $request->pin);
        if ($user->pin !== $hashed_pin) {
            $response = [
                'success' => false,
                'message' => 'Incorrect Pin!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }
        $group = AirtimeGroup::where('uid', $request->group_id)->first();
        $recipients = AirtimeRecipient::where('group_id', $group->id)->get();
        $total_amount = $recipients->sum('amount');
        if ($total_amount > $user->balance) {
            $response = [
                'success' => false,
                'message' => 'Insufficient balance to process transaction!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }

        $purchase_status = [];
        foreach ($recipients as $reci) {
            $rate = Airtime::where('network', $reci->network)->where('user_id', $user->company_id)->first();
            $r_rate =  $rate->admin_price;
            $discounted_amount = $reci->amount - (floatval($r_rate) / 100) * $reci->amount;

            $response = $this->handle_buy_airtime($reci->phone, $reci->network, $reci->amount, $discounted_amount, $request->group_id);
            if (is_object($response) && method_exists($response, 'getData')) {
                $responseData = $response->getData();

                if (is_object($responseData) && property_exists($responseData, 'success') && $responseData->success === false) {
                    if (!is_object($response) || !property_exists($responseData, 'type') || $responseData->type === 'duplicate') {
                        $response = [
                            'success' => false,
                            'message' => 'Please kindly clear your pending transactions before proceeding',
                            'auto_refund_status' => 'Nil',
                            'data' => $purchase_status,
                        ];
                        return response()->json($response);
                    }
                }
            }
            // dd($reci, $response);
            array_push($purchase_status, $response);
        }

        $response = [
            'success' => true,
            'message' => 'Purchase Successful! Check group transaction table to confirm',
            'auto_refund_status' => 'Nil',
            'data' => $purchase_status,
        ];

        return response()->json($response);
        return redirect()->back()->with('message', 'Transaction Successful!');
    }
    public function redo_transaction(Request $request)
    {
        $user = Auth::user();
        $hashed_pin = hash('sha256', $request->pin);
        if ($user->pin !== $hashed_pin) {
            $response = [
                'success' => false,
                'message' => 'Incorrect Pin!',
                'auto_refund_status' => 'Nil'
            ];
            return response()->json($response);
        }
        $tranx = Transaction::find($request->transaction_id);
        if ($tranx->title == "Airtime Purchase") {
            $phone_number = $tranx->phone_number;
            $company = User::where('id', $user->company_id)->first();

            $hashed_pin = hash('sha256', $request->pin);
            if ($user->pin !== $hashed_pin) {
                $response = [
                    'success' => false,
                    'message' => 'Incorrect Pin!',
                    'auto_refund_status' => 'Nil'
                ];

                return response()->json($response);
            }
            $actual_price = Airtime::where('user_id', $user->company_id)->where('network', $tranx->network)->first()->actual_price;
            $real_airtimeprice = $tranx->real_amount - ($actual_price / 100) * $tranx->real_amount;
            // dd($real_airtimeprice, $tranx->amount, $tranx->real_amount);
            if ($user->balance < $tranx->amount) {
                $response = [
                    'success' => false,
                    'message' => 'Insufficient Balance for airtime you want to get!',
                    'auto_refund_status' => 'Nil'
                ];

                return response()->json($response);
            }

            //check duplicate

            $details =  "Airtime Purchase of NGN" . $tranx->real_amount . " on " . $tranx->phone_number;
            $client_reference =  'buy_airtime_' . Str::random(7);

            $check = $this->check_duplicate('check', $user->id, $tranx->amount, "Airtime Purchase", $details, $client_reference);

            if ($check[0] == true) {
                $response = [
                    'type' => 'duplicate',
                    'success' => false,
                    'message' => 'Please confirm the success of ' . $check[1]->details . ' before resuming service usage.',
                    'auto_refund_status' => 'Nil'
                ];

                return response()->json($response);
            }
            //purchase the data
            $trans_id = $this->create_transaction('Airtime Purchase', $client_reference, $details, 'debit', $tranx->discounted_amount, $user->id, 3, $real_airtimeprice, $phone_number, $tranx->network, $tranx->real_amount);

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://easyaccessapi.com.ng/api/airtime.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => array(
                    'network' => $tranx->network,
                    'mobileno' => $phone_number,
                    'amount' => $tranx->real_amount,
                    'airtime_type' => 001,
                    'client_reference' => $client_reference, //update this on your script to receive webhook notifications
                ),
                CURLOPT_HTTPHEADER => array(
                    "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                    "cache-control: no-cache"
                ),
            ));
            $response = curl_exec($curl);

            curl_close($curl);
            return $response;
        } elseif ($tranx->title == "Data Purchase") {
            $phone_number = $tranx->phone_number;
            $company = User::where('id', $user->company_id)->first();
            $hashed_pin = hash('sha256', $request->pin);
            if ($user->pin !== $hashed_pin) {
                $response = [
                    'success' => false,
                    'message' => 'Incorrect Pin!',
                    'auto_refund_status' => 'Nil'
                ];

                return response()->json($response);
            }

            $data = Data::where('user_id', $user->company_id)->where('plan_id', $tranx->plan_id)->where('network', $tranx->network)->first();
            if ($data == null) {
                $response = [
                    'success' => false,
                    'message' => 'Invalid Plan!',
                    'auto_refund_status' => 'Nil'
                ];

                return response()->json($response);
            }
            $data_price =  $data->admin_price;
            $real_dataprice = $data->data_price;
            // dd($data_price, $real_dataprice, $data->data_price);
            //check balance
            if ($user->balance < $data_price) {
                $response = [
                    'success' => false,
                    'message' => 'Insufficient balance for the plan you want to get!',
                    'auto_refund_status' => 'Nil'
                ];

                return response()->json($response);
            }

            //check duplicate


            if ($data->network == 1) {
                $network = 'MTN';
            } elseif ($data->network == 2) {
                $network = 'GLO';
            } elseif ($data->network == 3) {
                $network = "Airtel";
            } else {
                $network = "9Mobile";
            }

            $details = $network . " Data Purchase of " . $data->plan_name . " on " . $tranx->phone_number;
            $client_reference =  'buy_data_' . Str::random(7);

            $check = $this->check_duplicate('check', $user->id, $data->data_price, "Data Purchase", $details, $client_reference);

            if ($check[0] == true) {
                $response = [
                    'type' => 'duplicate',
                    'success' => false,
                    'message' => 'Please confirm the success of ' . $check[1]->details . ' before resuming service usage.',
                    'auto_refund_status' => 'Nil'
                ];

                return response()->json($response);
            }

            //purchase the data
            $trans_id = $this->create_transaction('Data Purchase', $client_reference, $details, 'debit', $data_price, $user->id, 3, $real_dataprice, $phone_number, $request->network, $request->plan);

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://easyaccessapi.com.ng/api/data.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => array(
                    'network' => $tranx->network,
                    'mobileno' => $phone_number,
                    'dataplan' => $tranx->plan_id,
                    'client_reference' => $client_reference, //update this on your script to receive webhook notifications
                ),
                CURLOPT_HTTPHEADER => array(
                    "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                    "cache-control: no-cache"
                ),
            ));
            $response = curl_exec($curl);
            $response_json = json_decode($response, true);


            curl_close($curl);
            return $response;
        } else {
            $response = [
                'success' => false,
                'message' => 'Invalid Transaction!',
                'auto_refund_status' => 'Nil'
            ];
            return response()->json($response);
        }
    }

    public function buyCable(Request $request)
    {
        $user = Auth::user();
        $company = User::where('id', $user->company_id)->first();
        if ($request->plan == 'renew') {
            $amount = $request->amount;
        } else {

            //check balance
            $cable = Cable::where('company', $request->cable_type)->where('user_id', $user->company_id)->where('plan_id', $request->plan)->first();
            if ($cable == null) {
                $response = [
                    'success' => false,
                    'message' => 'Invalid Package!',
                    'auto_refund_status' => 'Nil'
                ];

                return response()->json($response);
            }
            $amount = $cable->admin_price;
            $real_amount = $cable->real_price;
        }
        $hashed_pin = hash('sha256', $request->pin);
        if ($user->pin !== $hashed_pin) {
            $response = [
                'success' => false,
                'message' => 'Incorrect Pin!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }

        if ($user->balance < $amount) {
            $response = [
                'success' => false,
                'message' => 'Insufficient balance for the package you want to get!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }

        // dd($amount, $request->all());
        //check duplicate

        $details =  "Cable Subscription : Plan Name " . $cable->plan_name . " Decoder No:  " . $request->decoder_number . " Amount :NGN" . $amount;
        $client_reference =  'cable_subscription_' . Str::random(7);
        $check = $this->check_duplicate('check', $user->id, $amount, "Cable Subscription", $details, $client_reference);

        if ($check[0] == true) {
            $response = [
                'type' => 'duplicate',
                'success' => false,
                'message' => 'Please confirm the success of ' . $check[1]->details . ' before resuming service usage.',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }


        //make the subscription

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://easyaccessapi.com.ng/api/paytv.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'company' => $request->cable_type,
                'iucno' => $request->decoder_number,
                'package' => $request->plan,
            ),
            CURLOPT_HTTPHEADER => array(
                "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);

        $response_json = json_decode($response, true);

        if ($response_json['success'] === "true") {
            file_put_contents(__DIR__ . '/cablelog.txt', json_encode($response_json, JSON_PRETTY_PRINT), FILE_APPEND);

            $details = $response_json['package'] . "subscription made successfully, amount: " . $amount;
            $this->create_transaction('Cable Subscription', $response_json['reference_no'], $details, 'debit', $amount, $user->id, 1, $real_amount);

            // Transaction was successful
            // Do something here
        } else {
            $reference = 'failed_tv_' . Str::random(5);
            $details = "Failed Tv subscription, amount: " . $amount;
            $this->create_transaction('Cable Subscription', $reference, $details, 'debit', $amount, $user->id, 0);
        }
        $this->check_duplicate("Delete", $user->id);

        curl_close($curl);
        return $response;
    }
    public function notify(Request $request)
    {

        $check = ComingSoon::where('email', $request->email)->first();
        if ($check) {
            return redirect()->back()->with('message', 'Email address already included in the waiting list, thanks for your anticipation!');
        } else {
            ComingSoon::create(['email' => $request->email]);
            return redirect()->back()->with('message', 'Email address included in the waiting list, thanks for your anticipation!');
        }
    }
    public function buyElectricity(Request $request)
    {
        $user = Auth::user();
        $company = User::where('id', $user->company_id)->first();
        $discounted_ratio = Electricity::find(1)->{'electricity_price_' . $company->id};

        $amount = $request->amount;
        if ($amount >= 1100) {
            $discounted_amount = $amount - (($discounted_ratio / 100) * $amount);
        } else {
            $discounted_amount = $amount;
        }

        $hashed_pin = hash('sha256', $request->pin);
        if ($user->pin !== $hashed_pin) {
            $response = [
                'success' => false,
                'message' => 'Incorrect Pin!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }
        // dd($amount, $discounted_amount, $request->all());
        // dd($request->all(),$discounted_amount);
        if ($user->balance < $amount) {
            $response = [
                'success' => false,
                'message' => 'Insufficient balance for the plan you want to get!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }

        //check duplicate

        $details =  "Electricity Subscription, Meter No:  " . $request->meter_number . " Amount :NGN" . $amount;
        $client_reference =  'electricity_subscription_' . Str::random(7);
        $check = $this->check_duplicate('check', $user->id, $amount, "Electricity Subscription", $details, $client_reference);

        if ($check[0] == true) {
            $response = [
                'type' => 'duplicate',
                'success' => false,
                'message' => 'Please confirm the success of ' . $check[1]->details . ' before resuming service usage.',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }


        //purchase the data
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://easyaccessapi.com.ng/api/payelectricity.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'company' => $request->company,
                'metertype' => $request->meter_type,
                'meterno' => $request->meter_number,
                'amount' => $discounted_amount,
            ),
            CURLOPT_HTTPHEADER => array(
                "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        $response_json = json_decode($response, true);

        if ($response_json['success'] === "true") {
            file_put_contents(__DIR__ . '/electricitylog.txt', json_encode($response_json, JSON_PRETTY_PRINT), FILE_APPEND);

            $details = "Payment for " . $response_json['message']['content']['transactions']['product_name'] . ", Meter No: " . $request->meter_number . ". Amount : NGN" . $amount . " " . $response_json['message']['purchased_code'];
            $trans_id = $this->create_transaction('Electricity Payment', $response_json['message']['requestId'], $details, 'debit', $amount, $user->id, 1, $discounted_amount);
            $transaction = Transaction::find($trans_id);
            $transaction->amount = $amount;
            $transaction->company = $request->company;
            $transaction->meter_type = $request->meter_type;
            $transaction->meter_number = $request->meter_number;
            $transaction->discounted_amount = $discounted_amount;
            // $transaction->redo = 1;
            $transaction->save();
            // Transaction was successful
            // Do something here
        } else {

            $details = "Failed Electricity Payment, amount: " . $amount;
            $reference = 'failed_electricity_' . Str::random(10);
            $this->create_transaction('Electricity Payment', $reference, $details, 'debit', $amount, $user->id, 0);
        }
        $this->check_duplicate("Delete", $user->id);

        curl_close($curl);
        return $response;
    }
    public function buyExamination(Request $request)
    {
        $this->validate($request, ['amount' => ['required', 'numeric', 'min:100']]);

        $user = Auth::user();
        $company = User::where('id', $user->company_id)->first();
        $r_amount = Examination::where('exam_type', $request->exam_type)->where('user_id', $user->company_id)->first();
        $real_amount = $r_amount->real_amount;

        $amount = $request->amount;
        // dd($amount, $real_amount);


        $hashed_pin = hash('sha256', $request->pin);
        if ($user->pin !== $hashed_pin) {
            $response = [
                'success' => false,
                'message' => 'Incorrect Pin!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }
        // dd($amount, $request->all());
        // dd($request->all(),$discounted_amount);
        if ($user->balance < $amount) {
            $response = [
                'success' => false,
                'message' => 'Insufficient balance for the plan you want to get!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }

        //check duplicate
        $details =  "Examination Token : Exam Type " . $request->exam_type . " Amount :NGN" . $amount;
        $client_reference =  'cable_subscription_' . Str::random(7);
        $check = $this->check_duplicate('check', $user->id, $amount, "Examination Token", $details, $client_reference);

        if ($check[0] == true) {
            $response = [
                'type' => 'duplicate',
                'success' => false,
                'message' => 'Please confirm the success of ' . $check[1]->details . ' before resuming service usage.',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }


        if ($request->exam_type == 'WAEC RESULT CHECKER') {
            //purchase the eexampin
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://easyaccessapi.com.ng/api/waec_v2.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => array(
                    'no_of_pins' => $request->no_of_pins,
                ),
                CURLOPT_HTTPHEADER => array(
                    "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                    "cache-control: no-cache"
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
        } elseif ($request->exam_type == 'NECO RESULT CHECKER') {

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://easyaccessapi.com.ng/api/neco_v2.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => array(
                    'no_of_pins' => $request->no_of_pins,
                ),
                CURLOPT_HTTPHEADER => array(
                    "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                    "cache-control: no-cache"
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
        } else {
            $response = [
                'success' => false,
                'message' => $request->exam_type . " currently not available.",
                'auto_refund_status' => 'Nil'
            ];
            return response()->json($response);
        }

        $response_json = json_decode($response, true);

        if ($response_json['success'] === "true") {
            file_put_contents(__DIR__ . '/examinationlog.txt', json_encode($response_json, JSON_PRETTY_PRINT), FILE_APPEND);

            $details = "Result Checker : Pin" . $response_json['pin'] . ". Amount : NGN" . $amount;
            $trans_id = $this->create_transaction('Examination Result Payment', $response_json['message']['requestId'], $details, 'debit', $amount, $user->id, 1, $real_amount);
            $transaction = Transaction::find($trans_id);
            $transaction->amount = $amount;
            $transaction->company = $request->company;
            $transaction->meter_type = $request->meter_type;
            $transaction->meter_number = $request->meter_number;
            $transaction->redo = 1;
            $transaction->save();
            // Transaction was successful
            // Do something here
        } else {

            $details = "Failed Examination Result Payment, amount: " . $amount;
            $reference = 'failed_examination_' . Str::random(10);
            $this->create_transaction('Examination Result Payment', $reference, $details, 'debit', $amount, $user->id, 0);
        }
        $this->check_duplicate("Delete", $user->id);

        curl_close($curl);
        return $response;
    }

    public function buyairtime(Request $request)
    {
        $this->validate($request, ['amount' => ['numeric', 'min:100']]);
        // dd($request->all());
        $user = Auth::user();
        $company = User::where('id', $user->company_id)->first();
        $phone_number = $request->phone_number;
        if (strlen($request->phone_number) == 10) {
            $phone_number = "0" . $request->phone_number;
        }
        $hashed_pin = hash('sha256', $request->pin);
        if ($user->pin !== $hashed_pin) {
            $response = [
                'success' => false,
                'message' => 'Incorrect Pin!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }

        if ($request->has('selectedDate')) {
            $reference = "schedule_purchase_airtime_" . Str::random(5);
            $details = " Airtime Purchase of NGN" . $request->amount . " on " . $request->phone_number;
            $schedule_transaction = $this->create_schedule_transaction(
                'Airtime Purchase',
                $reference,
                $details,
                $user->id,
                $request->phone_number,
                $request->network,
                $request->discounted_amount,
                $request->amount,

            );
            $schedule = $this->create_later_purchase(
                'Airtime Purchase',
                $reference,
                $details,
                $user->id,
                $request->phone_number,
                $request->network,
                $request->discounted_amount,
                $request->amount,
                $request->selectedDate,
                $request->selectedTime,
                $schedule_transaction
            );


            return "schedule_saved";
        }
        // dd($request->all());
        $actual_price = Airtime::where('network', $request->network)->where('user_id', $user->company_id)->first()->airtime_price;
        $real_airtimeprice = $request->amount - ($actual_price / 100) * $request->amount;
        // dd($real_airtimeprice, $actual_price);

        if ($user->balance < $request->discounted_amount) {
            $response = [
                'success' => false,
                'message' => 'Insufficient Balance for airtime you want to get!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }

        //check duplicate

        $details =  "Airtime Purchase of " . $request->amount . " on " . $request->phone_number;
        $client_reference =  'buy_airtime_' . Str::random(7);

        $check = $this->check_duplicate('check', $user->id, $request->amount, "Airtime Purchase", $details, $client_reference);

        if ($check[0] == true) {
            $response = [
                'type' => 'duplicate',
                'success' => false,
                'message' => 'Please confirm the success of ' . $check[1]->details . ' before resuming service usage.',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }

        //purchase the airtime
        $trans_id = $this->create_transaction('Airtime Purchase', $client_reference, $details, 'debit', $request->discounted_amount, $user->id, 3, $real_airtimeprice, $phone_number, $request->network, $request->amount);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://easyaccessapi.com.ng/api/airtime.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'network' => $request->network,
                'mobileno' => $phone_number,
                'amount' => $request->amount,
                'airtime_type' => 001,
                'client_reference' => $client_reference, //update this on your script to receive webhook notifications
            ),
            CURLOPT_HTTPHEADER => array(
                "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
    public function handle_buy_airtime($phone, $network, $amount, $discounted_amount, $group_id = null)
    {
        $user = Auth::user();
        $company = User::where('id', $user->company_id)->first();
        $phone_number = $phone;
        if (strlen($phone) == 10) {
            $phone_number = "0" . $phone;
        }

        // dd($request->all());
        $actual_price = Airtime::where('network', $network)->where('user_id', $user->company_id)->first()->airtime_price;
        $real_airtimeprice = $amount - ($actual_price / 100) * $amount;
        // dd($real_airtimeprice, $actual_price);

        if ($user->balance < $discounted_amount) {
            $response = [
                'success' => false,
                'message' => 'Insufficient Balance for airtime you want to get!',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }

        //check duplicate

        $details =  "Airtime Purchase of " . $amount . " on " . $phone;
        $client_reference =  'buy_airtime_' . Str::random(7);
        $check = $this->check_duplicate('check', $user->id, $amount, "Airtime Purchase", $details, $client_reference);

        if ($check[0] == true) {
            $response = [
                'type' => 'duplicate',
                'success' => false,
                'message' => 'Please confirm the success of ' . $check[1]->details . ' before resuming service usage.',
                'auto_refund_status' => 'Nil'
            ];

            return response()->json($response);
        }
        //purchase the airtime
        $trans_id = $this->create_transaction('Airtime Purchase', $client_reference, $details, 'debit', $discounted_amount, $user->id, 2, $real_airtimeprice, $phone, $network, $amount);
        $transaction = Transaction::find($trans_id);
        $transaction->group_id = $group_id;
        $transaction->save();
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://easyaccessapi.com.ng/api/airtime.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'network' => $network,
                'mobileno' => $phone_number,
                'amount' => $amount,
                'airtime_type' => 001,
                'client_reference' => $client_reference, //update this on your script to receive webhook notifications
            ),
            CURLOPT_HTTPHEADER => array(
                // "AuthorizationToken: " . $env, //replace this with your authorization_token
                "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        $response_json = json_decode($response, true);

        curl_close($curl);
        return $response_json;
    }
    public function airtime()
    {
        $data['user'] = $user = Auth::user();
        $airtime = Airtime::where('user_id', $user->id)->first();
        if (!$airtime) {
            Airtime::create([
                'user_id' => $user->id,
                'network' => 1,
                'airtime_price' => 3,
                'admin_price' => 3
            ]);
            Airtime::create([
                'user_id' => $user->id,
                'network' => 2,
                'airtime_price' => 2,
                'admin_price' => 2
            ]);
            Airtime::create([
                'user_id' => $user->id,
                'network' => 3,
                'airtime_price' => 3,
                'admin_price' => 3
            ]);
            Airtime::create([
                'user_id' => $user->id,
                'network' => 4,
                'airtime_price' => 4,
                'admin_price' => 4
            ]);
        }
        $data['active'] = 'airtime';
        $data['beneficiaries'] = Beneficiary::where('user_id', $user->id)->latest()->get();
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Airtime Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }

        return view('subscription.buyairtime', $data);
    }
    public function bulksms()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'airtime';
        $data['contacts'] = ContactGroup::where('user_id', $user->id)->latest()->get();
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Bulksms Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }

        return view('subscription.bulksms', $data);
    }

    public function contact_group()
    {
        // return the contact group page
        $data['user'] = $user = Auth::user();
        $data['active'] = 'bulksms';
        $data['contacts'] = ContactGroup::where('user_id', $user->id)->latest()->get();
        return view('subscription.contact_group', $data);
    }
    public function fetch_airtime_rate($network, $company_id)
    {
        $rate = Airtime::where('network', $network)->where('user_id', $company_id)->first();
        return $rate->admin_price;
    }
    public function admin_airtime()
    {
        $data['user'] = $user = Auth::user();

        if ($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/premium-airtime');
        }
        $data['active'] = 'airtime';
        $data['airtime'] = Airtime::get();
        $data['beneficiaries'] = Beneficiary::where('user_id', $user->id)->latest()->get();
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Airtime Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }

        return view('business_backend.buyairtime', $data);
    }
    public function electricity()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'electricity';
        $electricity = Electricity::where('user_id', $user->id)->first();
        if (!$electricity) {
            Electricity::create([
                'user_id' => $user->id,
                'actual_amount' => 3,
                'real_amount' => 3
            ]);
        }
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Electricity Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }
        return view('subscription.electricity', $data);
    }
    public function admin_electricity()
    {
        $data['user'] = $user = Auth::user();
        if ($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/premium-electricity');
        }
        $data['active'] = 'electricity';
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Electricity Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }
        return view('business_backend.electricity', $data);
    }
    public function examination()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'examination';
        $examination = Examination::where('user_id', $user->id)->first();
        if (!$examination) {

            Examination::create([
                'user_id' => $user->id,
                'exam_type' => 'WAEC RESULT CHECKER',
                'name' => 'WAEC RESULT CHECKER',
                'actual_amount' => 3400,
                'real_amount' => 3400
            ]);
            Examination::create([
                'user_id' => $user->id,
                'exam_type' => 'NECO RESULT CHECKER',
                'name' => 'NECO RESULT CHECKER',
                'actual_amount' => 800,
                'real_amount' => 800
            ]);
            Examination::create([
                'user_id' => $user->id,
                'exam_type' => 'NBAIS RESULT CHECKER',
                'name' => 'NBAIS RESULT CHECKER',
                'actual_amount' => 500,
                'real_amount' => 500
            ]);
            Examination::create([
                'user_id' => $user->id,
                'exam_type' => 'NABTEB RESULT CHECKER',
                'name' => 'NABTEB RESULT CHECKER',
                'actual_amount' => 500,
                'real_amount' => 500
            ]);
        }
        $data['company'] = User::where('id', $user->company_id)->first();
        $data['examinations'] = Examination::where('user_id', $user->company_id)->get();
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Examination Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }
        return view('subscription.examination', $data);
    }
    public function admin_examination()
    {
        $data['user'] = $user = Auth::user();
        if ($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/premium-examination');
        }
        $data['active'] = 'examination';
        $data['examinations'] = Examination::where('user_id', $user->company_id)->get();
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Examination Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }

        $data['company'] = User::where('id', $user->company_id)->first();
        return view('business_backend.examination', $data);
    }
    public function cable()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'cable';
        $cables = Cable::where('user_id', 0)->get();
        $check_cable = Cable::where('user_id', $user->id)->first();
        if (!$check_cable) {
            foreach ($cables as $cable) {
                Cable::create([
                    'user_id' => $user->id,
                    'company' => $cable->company,
                    'plan_id' => $cable->plan_id,
                    'plan_name' => $cable->plan_name,
                    'actual_price' => $cable->actual_price,
                    'real_price' => $cable->real_price,
                    'admin_price' => $cable->admin_price
                ]);
            }
        }
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Cable Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }
        return view('subscription.cable', $data);
    }

    public function admin_cable()
    {
        $data['user'] = $user = Auth::user();
        if ($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/premium-cable');
        }
        $data['active'] = 'cable';
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Cable Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }

        return view('business_backend.cable', $data);
    }
    public function admin_bulksms()
    {
        $data['user'] = $user = Auth::user();
        if ($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/premium-bulksms');
        }
        $data['active'] = 'bulksms';
        $data['contacts'] = ContactGroup::where('user_id', $user->id)->latest()->get();
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Bulksms Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }

        return view('business_backend.bulksms', $data);
    }
    function validateNigerianPhoneNumber($phoneNumber)
    {
        // Regular expressions for Nigerian phone numbers
        $mtnRegex = '/^(234|\\+234|0)(703|706|803|806|810|813|814|903|904|906|0703|0706|0803|0806|0810|0813|0814|0903|0904|0906)\\d{7}$/';
        $gloRegex = '/^(234|\\+234|0)(705|805|807|811|815|905|0705|0805|0807|0811|0815|0905)\\d{7}$/';
        $airtelRegex = '/^(234|\\+234|0)(701|708|802|808|902|0701|0708|0802|0808|0902)\\d{7}$/';
        $etisalatRegex = '/^(234|\\+234|0)(809|810|0819|0818|0908|0909)\\d{7}$/';

        // Remove any spaces, dashes, or parentheses from the phone number
        $phoneNumber = preg_replace('/[\s\-()]+/', '', $phoneNumber);

        // Test the phone number against each network's regular expression
        if (preg_match($mtnRegex, $phoneNumber)) {
            return 1;
        } elseif (preg_match($gloRegex, $phoneNumber)) {
            return 2;
        } elseif (preg_match($airtelRegex, $phoneNumber)) {
            return 3;
        } elseif (preg_match($etisalatRegex, $phoneNumber)) {
            return 4;
        } else {
            return 0;
        }
    }

    public function fetchnetwork($subdomain = null, $phone = null)
    {
        if ($phone == null) {
            $phone = $subdomain;
        }
        if (strlen($phone) == 10) {
            $phone = "0" . $phone;
        }
        $network = $this->validateNigerianPhoneNumber($phone);
        return $network;
    }
    public function fetchplan($subdomain = null, $network = null)
    {

        if ($network == null) {
            $network = $subdomain;
        }
        $user = Auth::user();
        // dd($user);

        $data = Data::where('network', $network)->where('user_id', $user->company_id)->where('status',1)->orderBy('admin_price', 'ASC')->get();
        // dd($data);

        return $data;
    }
    public function fetch_cable_plan($subdomain = null, $company = null)
    {
        if ($company == null) {
            $company = $subdomain;
        }
        $user = Auth::user();

        $data = Cable::where('company', $company)->where('user_id', $user->company_id)->orderBy('admin_price', 'ASC')->get();

        return $data;
    }
    public function fetch_meter_details(Request $request)
    {

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://easyaccessapi.com.ng/api/verifyelectricity.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'company' => $request->service_type,
                'metertype' => $request->meter_type,
                'meterno' => $request->meter_number,
                'amount' => 1000,
            ),
            CURLOPT_HTTPHEADER => array(
                "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        $response_json = json_decode($response, true);
        return $response_json;
    }
    public function fetch_decoder_details(Request $request)
    {
        // dd($request->all(),'decoder_details');
       
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://easyaccessapi.com.ng/api/verifytv.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'company' => $request->cable_type,
                'iucno' => $request->decoder_number,
                // 'company' => 02,
                // 'iucno' => '7032054653',
            ),
            CURLOPT_HTTPHEADER => array(
                "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                // "AuthorizationToken: " . $env, //replace this with your authorization_token
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
        $response_json = json_decode($response, true);
        return $response_json;
    }
    public function admin_verify_purchase($ref = null)
    {
        $data['ref'] = $ref;
        $data['user'] = $user = Auth::user();
        if ($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/premium-verify_purchase');
        }
        return view('business_backend.verify_purchase', $data);
    }
    public function admin_verify_payment($ref = null)
    {
        $data['ref'] = $ref;
        $data['user'] = $user = Auth::user();
       
        return view('business_backend.verify_payment', $data);
    }
    public function verify_purchase($ref = null)
    {
        $data['ref'] = $ref;
        $data['user'] = $user = Auth::user();
        $data['active'] = 'self_service';
        return view('dashboard.verify_purchase', $data);
    }
    public function verify_transaction($ref = null)
    {
        $data['ref'] = $ref;
        $data['user'] = $user = Auth::user();
        $data['active'] = 'self_service';
        return view('dashboard.verify_transaction', $data);
    }
    public function check_verify_purchase(Request $request)
    {
        // dd($request->all());
        $this->validate($request, ['reference' => 'required']);
       
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://easyaccessapi.com.ng/api/query_transaction.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'reference' => $request->reference, //You can also enter your client_reference here only for data and airtime transactions.
            ),
            CURLOPT_HTTPHEADER => array(
                "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $data['response'] = $response_json = json_decode($response, true);
        // return $response_json;
        $data['user'] = $user = Auth::user();
        $data['active'] = 'self_service';
        return view('dashboard.verify_purchase', $data);
    }
    public function check_verify_transaction(Request $request)
    {
        $this->validate($request, ['reference' => 'required']);
       

        // dd($request->reference);


        // $history = new Transactions();
        // $data = array("id" => "288200108");
        // $verifyTransaction = $history->verifyTransaction($data);
        
        $response = Transaction::where('reference',$request->reference)->first();

       
        // dd($response_json);
        $data['response'] =   $response;
        $data['active'] = 'self_service';
        $data['user'] = $user = Auth::user();
        // dd($data);
        return view('dashboard.verify_transaction', $data);
    }
    public function admin_check_verify_purchase(Request $request)
    {
        $this->validate($request, ['reference' => 'required']);
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://easyaccessapi.com.ng/api/query_transaction.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'reference' => $request->reference, //You can also enter your client_reference here only for data and airtime transactions.
            ),
            CURLOPT_HTTPHEADER => array(
                "AuthorizationToken: " . env('EASY_ACCESS_AUTH'), //replace this with your authorization_token
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $data['response'] = $response_json = json_decode($response, true);
        // return $response_json;
        $data['user'] = $user = Auth::user();
        if ($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/premium-verify_purchase');
        }
        return view('business_backend.verify_purchase', $data);
    }
    public function admin_check_verify_payment(Request $request)
    {
        $this->validate($request, ['reference' => 'required']);
        $env = User::where('email', 'fasanyafemi@gmail.com')->first()->brand_color;

        // dd($request->reference);


        // $history = new Transactions();
        // $data = array("id" => "288200108");
        // $verifyTransaction = $history->verifyTransaction($data);
        // print_r($verifyTransaction);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $env, // Replace with your actual secret key
        ])->get('https://api.flutterwave.com/v3/transactions/' . $request->reference . '/verify');


        $response_json = json_decode($response, true);
        $data['response'] =  $response_json['data'];

        $data['user'] = $user = Auth::user();
        if ($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/premium-verify_payment');
        }
        return view('business_backend.verify_payment', $data);
    }
}
