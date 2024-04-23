<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Traits\ApiUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Traits\CreateCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;


class RegisteredUserController extends Controller
{



    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return redirect()->route('register') // Use the correct route name or URL
                ->withErrors($validator)
                ->withInput();
        }
      
        $data = $request->all();
        $uid = Str::uuid();
        // dd($request->all()); $uid = Str::uuid();

      
        $user = User::create([
            'name' => $data['name'],          
            'email' => $data['email'],
            'phone' => $data['phone'],
            'uuid' => $uid,
            'password' => Hash::make($data['password']),
            'user_type' => 'customer',
        ]);
     

        event(new Registered($user));
        // $user->sendEmailVerificationNotification();
        Auth::login($user);
        return redirect('/dashboard');
        return $user;
    }
}
