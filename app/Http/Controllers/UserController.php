<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\MySession;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    
    public function print_transaction_receipt($id) {
        $data['transaction'] = $transaction = Transaction::where('uid',$id)->firstOrFail();
        $data['user'] = $user = Auth::user();
        $data['active'] = 'transactions';
        if($user->id == $transaction->user_id) {
            return view('dashboard.receipt',$data);
        } else {
            return redirect()->back()->with('error', "Access Denied");
        }
        // dd($transaction);

    }
    public function save_preference(Request $request)
    {
        // return $request->all();
        $user = User::where('email',$request->email)->first();
        if($user) {
            
        //    dd('here');
      
            $data['carts'] =  $cart = json_decode($request->cart);
            MySession::create([
                'name' => $request->name,
                'email' => $request->email,
                'user_id' => $user->id,
                'order_id' => Str::random(5),
                'rest_id' => $cart->restaurant,
                'amount' => $cart->totalPrice,
                'session' => json_encode($request->session),

            ]);
            return true;
        }
        return $request->all();
     
    }
    public function resetpassword(Request $request, $subdomain = null)
    {
      
        $this->validate($request, [
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required'
        ]);
        $user = Auth::user();
        // dd($request->all());
        if ($request->new_password == $request->confirm_password && Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->route('dashboard')->with('message', 'Password updated successfully');
        } else {
            return redirect()->back()->with('error', 'Incorrect password/ unmatched password');
        }
    }
    public function changepassword(Request $request)
    {
        $data['user'] = Auth::user();
        $data['active'] = 'password';
        return view('dashboard.changepassword', $data);
    }

    public function resetpin(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'current_pin' => 'required|integer',
            'new_pin' => 'required|integer',
            'confirm_pin' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Invalid parameters');
        }
      
        $user = Auth::user();
        // dd($request->all());
        if ($request->new_pin == $request->confirm_pin && hash('sha256', $request->current_pin) === $user->pin) {
            $user->pin =  hash('sha256', $request->new_pin);
            $user->save();
            return redirect()->back()->with('message', 'Pin updated successfully');
        } else {
            return redirect()->back()->with('error', 'Incorrect pin/ unmatched pin');
        }
    }
    public function resetforgotpin(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'new_pin' => 'required|integer',
            'confirm_pin' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Invalid parameters');
        }
        if (!session()->has('resetpin')) {
            return redirect()->back()->with('error', 'Token Expired');
        }
        $user = Auth::user();
        // dd($request->all());
        if ($request->new_pin == $request->confirm_pin && session()->get('resetpin') == $request->token) {
            $user->pin =  hash('sha256', $request->new_pin);
            $user->save();
            session()->remove('resetpin');
            return redirect('/dashboard')->with('message', 'Pin updated successfully');
        } else {
            return redirect()->back()->with('error', 'Incorrect pin/ unmatched pin');
        }
    }
    public function changepin(Request $request)
    {
        $data['user'] = Auth::user();
        $data['active'] = 'change_pin';
       
        return view('dashboard.changepin', $data);
    }
    public function admin_changepin(Request $request)
    {
        $data['user'] = $user = Auth::user();
        if($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/user-change-pin');
        }
        $data['active'] = 'change_pin';
       
        return view('business_backend.changepin', $data);
    }
    public function forgotpin()
    {
        $user = Auth::user();
        $token = Str::random(7);
        $data = array('user' => $user, 'token' => $token);
        session()->put('resetpin', $token, 5);
        Mail::send('mail.resetpin', $data, function ($message) use ($user) {
            $message->to($user->email)->subject('Reset Your Pin');
            $message->from('info@vtubiz.com', 'VTUBIZ');
        });
        return true;
    }
    public function resetPinWithToken()
    {
        $data['user'] = Auth::user();
        $data['active'] = 'changepin';
        return view('dashboard.resetpintoken', $data);
    }
}
