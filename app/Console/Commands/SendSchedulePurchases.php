<?php

namespace App\Console\Commands;

use App\Models\Data;
use App\Models\User;
use App\Models\Airtime;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use App\Models\SchedulePurchase;

class SendSchedulePurchases extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:send_schedule_purchase';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $current_date = date('Y-m-d');
        $current_time = date('H:i');
    

        $schedules = SchedulePurchase::where('status',0)->where('date',$current_date)->where('time',$current_time)->get();
        foreach($schedules as $schedule) {
            $user = User::find($schedule->user_id);
           
            if ($schedule->title == "Airtime Purchase") {
                $phone_number = $schedule->phone_number;
                $company = User::where('id',$user->company_id)->first();
    
              
                $actual_price = Airtime::where('network',$schedule->network)->first()->actual_price;
                $real_airtimeprice = $schedule->real_amount - ($actual_price/100) * $schedule->real_amount;
                // dd($real_airtimeprice, $schedule->amount, $schedule->real_amount);
                if ($user->balance < $schedule->amount ||  $company->balance < $schedule->amount) {
                    $response = [
                        'success' => false,
                        'message' => 'Insufficient Balance for airtime you want to get!',
                        'auto_refund_status' => 'Nil'
                    ];
    
                    return response()->json($response);
                }
    
                //check duplicate
                $check = $this->check_duplicate('check', $user->id);
                if ($check == true) {
                    $response = [
                        'success' => false,
                        'message' => 'Duplicate transaction, please try again in few minutes time!',
                        'auto_refund_status' => 'Nil'
                    ];
    
                    return response()->json($response);
                }
                //purchase the data
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
                        'network' => $schedule->network,
                        'mobileno' => $phone_number,
                        'amount' => $schedule->amount,
                        'airtime_type' => 001,
                        'client_reference' => 'buy_airtime_' . Str::random(7), //update this on your script to receive webhook notifications
                    ),
                    CURLOPT_HTTPHEADER => array(
                        "AuthorizationToken: bace8dcca1562735ce84bbe73042925d", //replace this with your authorization_token
                        "cache-control: no-cache"
                    ),
                ));
                $response = curl_exec($curl);
                $response_json = json_decode($response, true);
    
                if ($response_json['success'] === "true") {
                    $transaction = Transaction::find($schedule->transaction_id);
                    $transaction->before = $user->balance;
                    $transaction->admin_before = $company->balance;
                    $transaction->status = 1;
                    $user->balance -= $schedule->amount;
                  
                    $user->total_spent += $schedule->amount;
                    $user->save();
                    $actual_price = Airtime::where('network', $schedule->network)->first()->actual_price;
                    $real_airtimeprice = $schedule->amount - ($actual_price / 100) * $schedule->amount;
            
                    $profit = $schedule->amount - $real_airtimeprice;
                    $company->balance += $profit;
                    $company->save();
                    $transaction->after = $user->balance;
                    $transaction->admin_after = $company->balance;
                    $transaction->redo = 1;
                    $transaction->save();
                  
                    // Transaction was successful
                    // Do something here
                } else {
                    $reference = 'failed_airtime_' . Str::random(5);
                    $details = "Airtime Purchase of NGN" . $schedule->amount . " on " . $schedule->phone_number;
                    $this->create_transaction('Airtime Purchase', $reference, $response_json['message'], 'debit', $schedule->discounted_amount, $user->id, 0,$real_airtimeprice);
                }
                $this->check_duplicate("Delete", $user->id);
    
                curl_close($curl);
                return true;
                return $response;
            } 

            elseif($schedule->title == "Data Purchase") {
                $company = User::where('id', $user->company_id)->firstOrFail();

                $data = Data::where('plan_id', $schedule->plan_id)->where('network', $schedule->network)->first();
                $data_price =  $data->{'data_price_' . $company->id};
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
                if ($user->balance < $data_price || $company->balance < $data_price) {
                    $response = [
                        'success' => false,
                        'message' => 'Insufficient balance for the plan you want to get!',
                        'auto_refund_status' => 'Nil'
                    ];
        
                    return response()->json($response);
                }
                // dd($request->all(),$data_price, $real_dataprice, env('EASY_ACCESS_AUTH'));
        
                //check duplicate
                // $check = $this->check_duplicate('check', $user->id);
                // if ($check == true) {
                //     $response = [
                //         'success' => false,
                //         'message' => 'Duplicate Transaction!',
                //         'auto_refund_status' => 'Nil'
                //     ];
        
                //     return response()->json($response);
                // }
                //purchase the data
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
                        'network' => $schedule->network,
                        'mobileno' => $schedule->phone_number,
                        'dataplan' => $schedule->plan_id,
                        'client_reference' => 'buy_data_' . Str::random(7), //update this on your script to receive webhook notifications
                    ),
                    CURLOPT_HTTPHEADER => array(
                        // "AuthorizationToken: bace8dcca1562735ce84bbe73042925d", //replace this with your authorization_token
                        "AuthorizationToken: bace8dcca1562735ce84bbe73042925d", //replace this with your authorization_token
                        "cache-control: no-cache"
                    ),
                ));
                $response = curl_exec($curl);
                $response_json = json_decode($response, true);
        
                if ($response_json['success'] === "true") {
                    $details = $response_json['network'] . " Data Purchase of " . $response_json['dataplan'] . " on " . $request->phone_number;
                    $transaction = Transaction::find($schedule->transaction_id);
                    $transaction->before = $user->balance;
                    $transaction->admin_before = $company->balance;
                    $transaction->status = 1;
                    $user->balance -= $schedule->amount;
                    $user->total_spent += $schedule->amount;
                    $user->save();
                    $profit = $schedule->amount - floatval($real_dataprice);
                    $company->balance += $profit;
                    $company->save();
                    $transaction->after = $user->balance;
                    $transaction->admin_after = $company->balance;
                 
                    $transaction->redo = 1;
                    $transaction->save();
                    // Transaction was successful
                    // Do something here
                } else {
                    $reference = 'failed_data_' . Str::random(5);
                    $details =   $data->plan_name . " (" . $data->network . ")" . " data purchase on " . $schedule->phone_number;
        
                    $this->create_transaction('Data Purchase', $reference, $details, 'debit', $data->data_price, $user->id, 0);
                }
                // $this->check_duplicate("Delete", $user->id);
        
                curl_close($curl);
                return true;
                return $response;
        

            }
            else {
                return true;
            }

        }
        return true;
    }
}
