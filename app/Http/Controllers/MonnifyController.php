<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\TransactionTrait;
use Illuminate\Support\Facades\Log;

// class MonnifyController extends Controller
class CustomTransactionHashUtil

{
    use TransactionTrait;
    public function monnifyTransactionComplete2(Request $request)
    {

        $DEFAULT_MERCHANT_CLIENT_SECRET = env("DEFAULT_MERCHANT_CLIENT_SECRET");
        $data = json_encode($request->eventData);
        $req = $request->all();
        // $email = $req['eventData']['customer']['email'];
        $email = $request->input('customer.email');
        $eventType = $request->input('paymentStatus');
        $r_amountPaid = $request->input('amountPaid');
        $amountPaid = $r_amountPaid - 50;
        $reference = 'tranx' . Str::random(8);
        Log::info('monnifyWebhook', array('customer' => $request->all(), 'rara' => $email));
        $computedHash = CustomTransactionHashUtil::computeSHA512TransactionHash($data, $DEFAULT_MERCHANT_CLIENT_SECRET);
        if ($eventType == "PAID") {
            $user = User::where('email', $email)->firstOrFail();

            $details = "Account credited with" . $amountPaid;
            $this->create_transaction('Account Funded Through Transfer', $reference, $details, 'credit', $amountPaid, $user->id,1);
            http_response_code(200);
        } else if ($eventType == "PENDING_TRANSACTION") {
            $user = User::where('email', $email)->firstOrFail();

            $details = "Account credited with" . $amountPaid;
            $this->create_transaction('Pending Credit', $reference, $details, 'credit', 0, $user->id,2);
            http_response_code(401);
            //Tell that particular user that the transaction is under pending
        } else {
            http_response_code(200);
        }
    }
}
