<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'loans';
   
    public function user() {
       
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function checkcancel($id) {
        $loan = Loan::where('reference', $id)->first();
        $user = Auth::user();
        $cancel = Loan::where('waybill_id', $loan->uid)->get();
        if (count($cancel) == 1) {

            if ($cancel[0]->user_id == $user->id) {
                $cancel = 'self';
            } else {
                $cancel = 'client';
            }
        } elseif (count($cancel) == 2) {
            if ($waybill->user_id == $user->id) {
                $cancel = 'withdraw';
            } else {
                $cancel = 'client-withdraw';
            }
        } else {
            $cancel = 'any';
        }
        return $cancel;
    }
}
