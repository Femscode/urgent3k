<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Data;
use App\Models\User;
use App\Models\Cable;
use App\Models\Theme;
use App\Models\Airtime;
use App\Models\BulkEmail;
use App\Models\Beneficiary;
use App\Models\Electricity;
use App\Models\Examination;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Traits\TransactionTrait;
use App\Models\BulkSMSTransaction;
use App\Models\DuplicateTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Redirect;

class BusinessController extends Controller
{
   
    use TransactionTrait;
  
    public function index()
    {
        return view('frontend.index');
        return 'good';
    }
    public function upgrade($id)
    {
        $user = User::find($id);
        // dd($user);
        if ($user->user_type == 'customer') {
            $user->user_type = 'admin';
            $user->save();
            return redirect('/dashboard')->with('message', 'Account Upgraded Successfully!');
        } else {
            $user->user_type = 'customer';
            $user->save();
            return redirect('/dashboard')->with('message', 'Account Downgraded Successfully!');
        }
    }
    public function user_management()
    {
        $data['user'] = $user = Auth::user();
        $data['users'] = User::where('company_id', $user->id)->latest()->get();
        return view('business_backend.users', $data);
    }
    public function landing($subdomain)
    {
        $data['user'] = $user = User::where('brand_name', $subdomain)->first();
        if ($user) {
            $id = $user->selected_theme;

            $data['mtn'] = Data::where('network', 1)->orderBy('data_price')->take(20)->get();
            $data['glo'] = Data::where('network', 2)->orderBy('data_price')->take(20)->get();
            $data['airtel'] = Data::where('network', 3)->orderBy('data_price')->take(20)->get();
            $data['nmobile'] = Data::where('network', 4)->orderBy('data_price')->take(20)->get();
            $view = "business_backend.theme" . $id;
            return view($view, $data);
        } else {
            return redirect("localhost");
        }
    }
    public function select_theme(Request $request)
    {
        $user = Auth::user();
        $user->selected_theme = $request->id;
        $user->save();
        return true;
    }
    public function dashboard()
    {
        $data['user'] = $user = Auth::user();
        if ($user->pin == null) {
            return view('dashboard.setpin', $data);
        }
        // return redirect('/my-dashboard');
        if($user->user_type == 'customer' || $user->user_type == 'user' || $user->user_type == 'client_customer') {
            return redirect('/my-dashboard');
        }
        

      
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'General Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }
        $data['transactions'] = Transaction::where('company_id', $user->id)->latest()->get();
        $data['users'] = User::where('company_id', $user->id)->whereNotIn('id', [$user->id])->get();
        $data['total_user_balance'] =  User::where('company_id', $user->id)->whereNotIn('id', [$user->id])->sum('balance');
        $currentDate = Carbon::today();

        $data['today_transactions'] = Transaction::where('company_id', $user->id)
            ->whereDate('created_at', $currentDate)
            ->latest()
            ->get();

        return view('business_backend.index', $data);
    }

    public function check_domain(Request $request)
    {
        $domain = $request->domain;
        // dd($domain, $request->all());
        $apiKey = env("GO_DADDY_PUBLIC_KEY");
        $apiSecret = env("GO_DADDY_SECRET_KEY");
      

        $response = Http::withHeaders([
            'Authorization' => 'sso-key ' . $apiKey . ':' . $apiSecret,
        ])->get('https://api.godaddy.com/v1/domains/available', [
            'domain' => $domain,
        ]);

        return $response->json();
    }
    public function domain_suggestion(Request $request)
    {
        $domain = $request->domain;
        // dd($domain, $request->all());
        $apiKey = env("GO_DADDY_PUBLIC_KEY");
        $apiSecret = env("GO_DADDY_SECRET_KEY");
        

        $response = Http::withHeaders([
            'Authorization' => 'sso-key ' . $apiKey . ':' . $apiSecret,
        ])->get('https://api.godaddy.com/v1/domains/suggest', [
            'domain' => $domain,
            'query' => $domain,
            'country' => 'NG',
        ]);
        // dd($response);
        return $response->json();
    }
    public function customized_domain()
    {
        $data['user'] = $user = Auth::user();
        $data['transactions'] = Transaction::where('company_id', $user->id)->latest()->get();
        $data['users'] = User::where('company_id', $user->id)->get();
        $data['total_user_balance'] =  User::where('company_id', $user->id)->sum('balance');

        return view('business_backend.customized_domain', $data);
    }
    public function profile()
    {
        $data['user'] = $user = Auth::user();
        if($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/my-profile');
        }
        return view('business_backend.profile', $data);
    }
   
    public function update_customization(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        if ($request->submit_type == 'reset') {
            $user->brand_color = null;
            $user->font_family = null;
            $user->heading_1 = null;
            $user->heading_2 = null;
            $user->sub_heading_1 = null;
            $user->sub_heading_2 = null;
            $user->about_us = null;
            $user->description = null;
            $user->address = null;
            $user->instagram = null;
            $user->facebook = null;
            $user->twitter = null;
            $user->image_1 = null;
            $user->image_2 = null;
        } else {


            if ($request->image !== null) {
                $image = $request->file('image');
                $imageName = $image->hashName();
                $image->move(public_path('brand_images'), $imageName);
                $user->logo = $imageName;
            }
            $user->brand_color = $request->brand_color;
            $user->font_family = $request->font_family;
            $user->heading_1 = $request->heading_1;
            $user->heading_2 = $request->heading_2;
            $user->sub_heading_1 = $request->sub_heading_1;
            $user->sub_heading_2 = $request->sub_heading_2;
            $user->about_us = $request->about_us;
            $user->description = $request->description;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->instagram = $request->instagram;
            $user->facebook = $request->facebook;
            $user->twitter = $request->twitter;
            if ($request->image_1 !== null) {
                if ($user->image_1 !== null && file_exists(public_path('website_images') . '/' . $user->image_1)) {
                    unlink(public_path('website_images') . '/' . $user->image_1);
                }
                $image = $request->file('image_1');
                $imageName = $image->hashName();
                $image->move(public_path('website_images'), $imageName);
                $user->image_1 = $imageName;
            }
            if ($request->image_2 !== null) {
                if ($user->image_2 !== null && file_exists(public_path('website_images') . '/' . $user->image_2)) {
                    unlink(public_path('website_images') . '/' . $user->image_2);
                }
                $image = $request->file('image_2');
                $imageName = $image->hashName();
                $image->move(public_path('website_images'), $imageName);
                $user->image_2 = $imageName;
            }
        }

        $user->save();
        return redirect()->back()->with('success', 'Customization Successfully!');
    }

    public function fundwallet()
    {

        $data['user'] = $user = Auth::user();
        if($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/user-fundwallet');
        }
        $data['active'] = 'fundwallet';
        $notification = Notification::where('user_id', $user->company_id)->where('type', 'Payment Notification')->first();

        if ($notification && $notification->title !== null) {
            $data['notification'] = $notification;
        }

       
        return view('business_backend.fundwallet', $data);
    }

    public function saveBeneficiary(Request $request)
    {
        // dd($request->all());
        try {
            $user = Auth::user();
            $this->validate($request, [
                'name' => 'required',
                'phone' => ['required']
            ]);
            $check = Beneficiary::where('user_id', $user->id)->where('phone', $request->phone)->first();
            if ($check) {
                return false;
            }
            Beneficiary::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'phone' => $request->phone

            ]);

            $response = [
                'success' => true,
                'message' => 'Beneficiary Created Successfully',

            ];
            return $response;
        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'message' => $e->getMessage(),

            ];
            return $response;
        }
    }
    public function removeBeneficiary(Request $request)
    {
        // dd($request->all());
        try {
            $user = Auth::user();
            $this->validate($request, [
                'phone' => 'required',
            ]);
            Beneficiary::where('phone', $request->phone)->delete();

            $response = [
                'success' => true,
                'message' => 'Beneficiary Removed Successfully',

            ];
            return $response;
        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'message' => $e->getMessage(),

            ];
            return $response;
        }
    }
    public function withdraw()
    {

        $data['user'] = $user = Auth::user();
        $data['active'] = 'fundwallet';


        return view('business_backend.withdraw', $data);
    }

    public function theme()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'theme';
        $data['themes'] = Theme::latest()->get();
        return view('business_backend.theme', $data);
    }
    public function theme_preview($id)
    {
        $data['theme'] = $theme = Theme::where('uuid', $id)->first();
        $data['user'] = $user =Auth::user();
        $data['mtn'] = Data::where('network', 1)->where('user_id',$user->company_id)->orderBy('data_price')->take(20)->get();
        $data['glo'] = Data::where('network', 2)->where('user_id',$user->company_id)->orderBy('data_price')->take(20)->get();
        $data['airtel'] = Data::where('network', 3)->where('user_id',$user->company_id)->orderBy('data_price')->take(20)->get();
        $data['nmobile'] = Data::where('network', 4)->where('user_id',$user->company_id)->orderBy('data_price')->take(20)->get();
        $view = "business_backend.theme" . $theme->id;
        return view($view, $data);
    }
    public function customize_theme($id)
    {
        $data['theme'] = Theme::where('uuid', $id)->first();
        $data['user'] = Auth::user();
        $data['active'] = 'theme';
        $data['id'] = $id;

        return view("business_backend.customize", $data);
    }
    public function payment_transactions()
    {
        $data['user'] = $user = Auth::user();
        $data['transactions'] = $transactions =  Transaction::where('company_id', $user->id)->where('title', 'Account Funded')->orWhere('title', 'Funds Withdraw')->orWhere('title', 'Manual Funding')
            ->orWhere('title', 'Payment Recieved')
            ->orWhere('title', 'Bonus Credited')
            ->orWhere('title', 'Account Funded Through Transfer')
            ->orWhere('title', 'Pending Credit')
            ->latest()->get();
        // dd('here');
        return view('business_backend.payment_transactions', $data);
    }
    public function purchase_transactions()
    {
        $data['user'] = $user = Auth::user();
        $data['transactions'] = $transactions =  Transaction::where('company_id', $user->id)->where('title', '!=', 'Account Funded')->latest()->get();
        return view('business_backend.purchase_transactions', $data);
    }
    public function pending_transactions()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'transactions';
        $data['transactions'] = $transactions =  DuplicateTransaction::where('user_id', $user->id)->latest()->get();
        if($user->user_type == 'admin') {
            return view('business_backend.pending_transactions', $data);
        }
        return view('dashboard.pending_transactions', $data);
        
    }
    public function mytransactions()
    {
        $data['user'] = $user = Auth::user();
        $data['active'] = 'transactions';
        $data['transactions'] = $transactions =  Transaction::where('user_id', $user->id)->latest()->get();
        if($user->user_type == 'admin') {
            return view('business_backend.mytransactions', $data);
        }
        return view('dashboard.transactions', $data);
        
    }
    public function bulksms_transactions()
    {
        $data['user'] = $user = Auth::user();
        if($user->user_type == 'customer' || $user->user_type == 'client_customer') {
            return redirect('/premium-bulksms_transactions');
        }
        $data['transactions'] = $transactions =  BulkSMSTransaction::where('company_id', $user->id)->where('user_id',$user->id)->latest()->get();
        return view('business_backend.bulksms_transactions', $data);
    }
    public function data_prices()
    {
        $data['user'] = $user = Auth::user();
        if($user->user_type == 'customer') {
            return redirect('/my-dashboard');
        }
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
        $data['datas']  = Data::where('user_id', $user->id)->get();

        return view('business_backend.data_price', $data);
    }
    public function airtime_prices()
    {
        $data['user'] = $user = Auth::user();
        if($user->user_type == 'customer') {
            return redirect('/my-dashboard');
        }
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


        $data['user'] = $user = Auth::user();
        $data['airtimes']  = Airtime::where('user_id', $user->id)->latest()->get();

        return view('business_backend.airtime_price', $data);
    }
    public function electricity_prices()
    {
        $data['user'] = $user = Auth::user();
        if($user->user_type == 'customer') {
            return redirect('/my-dashboard');
        }
        $electricity = Electricity::where('user_id', $user->id)->first();
        if (!$electricity) {
            Electricity::create([
                'user_id' => $user->id,

                'actual_amount' => 3,
                'real_amount' => 3
            ]);
        }

        $data['user'] = $user = Auth::user();
        $data['electricities']  = Electricity::where('user_id', $user->id)->get();

        return view('business_backend.electricity_price', $data);
    }
    public function bulksms_prices()
    {
        $data['user'] = $user = Auth::user(); if($user->user_type == 'customer') {
            return redirect('/my-dashboard');
        }

        return view('business_backend.bulksms_price', $data);
    }
    public function cable_prices()
    {

        $data['user'] = $user = Auth::user();
        if($user->user_type == 'customer') {
            return redirect('/my-dashboard');
        }
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
        $data['user'] = $user = Auth::user();
        $data['cables']  = Cable::where('user_id', $user->id)->get();

        return view('business_backend.cable_price', $data);
    }
    public function examination_prices()
    {
        $data['user'] = $user = Auth::user();
        if($user->user_type == 'customer') {
            return redirect('/my-dashboard');
        }

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

        $data['user'] = $user = Auth::user();
        $data['examinations']  = Examination::where('user_id', $user->id)->get();

        return view('business_backend.examination_price', $data);
    }
    public function save_admin_data(Request $request)
    {
        // dd($request->all());
        // dd($request->all());
        $user = Auth::user();
        $requestData = $request->all();
        foreach ($requestData['id'] as $key => $value) {


            $data = Data::find($value);
            if ($requestData['admin_price'][$key] > 10 && $requestData['admin_price'][$key] > $data->data_price) {
                $data->plan_name = $requestData['plan_name'][$key];
                $data->admin_price = $requestData['admin_price'][$key];
                $data->save();
            }
        }
        return redirect()->back()->with('success', 'Data Price Updated Successfully!');
    }
    public function save_admin_airtime(Request $request)
    {
        // dd($request->all());
        // dd($request->all());
        $user = Auth::user();
        $requestData = $request->all();
        // dd($requestData);
        foreach ($requestData['id'] as $key => $value) {


            $airtime = Airtime::find($value);
            if ($requestData['admin_price'][$key] < 10 && $requestData['admin_price'][$key] < $airtime->airtime_price) {
                $airtime->admin_price = $requestData['admin_price'][$key];
                $airtime->save();
            }
        }

        return redirect()->back()->with('success', 'Airtime Price Updated Successfully!');
    }
    public function save_admin_electricity(Request $request)
    {
        $this->validate($request, ['real_amount' => ['required', 'numeric', 'min:1']]);
        // dd($request->all());
        // dd($request->all());
        $user = Auth::user();

        $electricity = Electricity::find($request->id);

        if ($request->real_amount < $electricity->actual_amount)
            $electricity->real_amount = $request->real_amount;
        $electricity->save();

        return redirect()->back()->with('success', 'Electricity Price Updated Successfully!');
    }
    public function save_admin_bulksms(Request $request)
    {
        // dd($request->all());
        $this->validate($request, ['real_amount' => ['required', 'numeric', 'min:1']]);
        // dd($request->all());
        $user = Auth::user();
        if ($request->real_amount  > 3.8) {
            $user->bulksms_price = $request->real_amount;
        }
        $user->save();

        return redirect()->back()->with('success', 'Bulk SMS Price Updated Successfully!');
    }
    public function save_admin_cable(Request $request)
    {
        // dd($request->all());
        // dd($request->all());
        $user = Auth::user();
        $requestData = $request->all();
        foreach ($requestData['id'] as $key => $value) {


            $cable = Cable::find($value);
            if ($requestData['admin_price'][$key] > 500 && $requestData['admin_price'][$key] > $cable->real_price) {
                $cable->plan_name = $requestData['plan_name'][$key];
                $cable->admin_price = $requestData['admin_price'][$key];
                $cable->save();
            }
        }

        return redirect()->back()->with('success', 'Electricity Price Updated Successfully!');
    }
    public function save_admin_exam(Request $request)
    {
        //    dd($request->all());
        $user = Auth::user();
        $requestData = $request->all();
        foreach ($requestData['id'] as $key => $value) {


            $exam = Examination::find($value);
            if ($requestData['exam_price'][$key] > 500 && $requestData['exam_price'][$key] > $exam->actual_amount) {
                $exam->exam_type = $requestData['exam_type'][$key];
                $exam->name = $requestData['exam_type'][$key];
                $exam->real_amount = $requestData['exam_price'][$key];
                $exam->save();
            }
        }
        return redirect()->back()->with('success', 'Examination Price Updated Successfully!');
    }

    public function notifications()
    {
        //check if user have notifications
        $data['user'] = $user = Auth::user();
        $notification = Notification::where('user_id', $user->id)->first();
        if ($notification) {
            $data['notifications'] = Notification::where('user_id', $user->id)->get();
        } else {
            //create notifications for users once there is non
            Notification::create([
                'user_id' => $user->id,
                'type' => "Airtime Notification",
            ]);
            Notification::create([
                'user_id' => $user->id,
                'type' => "Data Notification",
            ]);
            Notification::create([
                'user_id' => $user->id,
                'type' => "Cable Notification",
            ]);
            Notification::create([
                'user_id' => $user->id,
                'type' => "Electricity Notification",
            ]);
            Notification::create([
                'user_id' => $user->id,
                'type' => "Examination Notification",
            ]);
            Notification::create([
                'user_id' => $user->id,
                'type' => "Bulksms Notification",
            ]);
            Notification::create([
                'user_id' => $user->id,
                'type' => "General Notification",
            ]);
            Notification::create([
                'user_id' => $user->id,
                'type' => "Payment Notification",
            ]);
            $data['notifications'] = Notification::where('user_id', $user->id)->get();
        }
        // dd($data);
        return view('business_backend.notifications', $data);
    }
    public function email_marketing()
    {
        $data['user'] = $user = Auth::user();
        $data['my_users'] = User::where('company_id', $user->id)->get();
        return view('business_backend.email_marketing', $data);
    }

    public function sendBulkEmail(Request $request)
    {
      
        $this->validate($request, ['subject' => 'required', 'message' => 'required']);
        // dd($request->all());
        //check if the user is blocked
        $user = Auth::user();
        if ($user->block == 1) {
            return redirect()->back()->with('error', 'You are currently not permitted to use the bulk Email service, kindly reach out to the admin.');
        }
        //check if the user has sent email today
        $date = date("Y-m-d H:i:s");
        $c_date = Carbon::parse($date);
        // dd(C);
        $check_email = BulkEmail::where('user_id', $user->id)->whereDate('created_at', $c_date->toDateString())->first();

        if ($check_email) {
            return redirect()->back()->with('error', 'You have reached your daily limit, try sending mail again tommorrow.');
        }
        //now send the mail
        $allusers = User::where('company_id', $user->id)->get();
        BulkEmail::create([
            'user_id' => $user->id,
            'subject' => $request->message,
            'message' => $request->message,
            'total_users' => count($allusers)

        ]);
        $brand = $user;
        $brand_logo = $user->logo;
        $subject = $request->subject;
        $message = $request->message;
        foreach ($allusers as $user) {
            $user_email = $user->email;
            $data = array('brand_name' => $brand->brand_name, 'brand_logo' => $brand->logo,  'my_subject' => $subject, 'my_message' => $message);
            // dd($data);

            Mail::send('mail.bulkemail', $data, function ($message) use ($subject, $user_email) {
                $message->to($user_email)->subject($subject);
                $message->from('info@vtubiz.com', 'VTUBIZ');
            });
        }
    }

    public function update_notification(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     'title' =>'required',
        //     // 'description' => 'required',
        //     'notf_id' => 'required'
        // ]);
        $user = Auth::user();
        if($user->email == 'fasanyafemi@gmail.com') {
            $notification = Notification::find($request->notf_id);
            $notifications = Notification::where('type',$notification->type)->get();
            foreach($notifications as $notification) {
                $notification->title = $request->title;
                $notification->description = $request->description;
                $notification->save();
            }           
        }
        else {
            $notification = Notification::find($request->notf_id);
            $notification->title = $request->title;
            $notification->description = $request->description;
            $notification->save();
        }
       
        return redirect()->back()->with('success', 'Notification updated successfully!');
    }
    public function change_password()
    {
        $data['user'] = Auth::user();
        $data['active'] = 'password';
        return view('dashboard.changepassword', $data);
    }
    public function resetpassword(Request $request)
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
            return redirect()->route('admin_dashboard')->with('message', 'Password updated successfully');
        } else {
            return redirect()->back()->with('error', 'Incorrect password/ unmatched password');
        }
    }
    public function fund_wallet($id)
    {
        //check if the user belongs to the brand
        $user = User::where('uuid', $id)->first();
        $company = Auth::user();
        if ($user->company_id == $company->id || $company->email == 'fasanyafemi@gmail.com') {
            $data['user'] = $user;
            return view('business_backend.fund_wallet', $data);
        } else {
            return Redirect()->route('dashboard')->with('Message', 'Permission Denied');
        }
    }
    public function credit_user(Request $request)
    {
        //check if the user belongs to the brand
        $this->validate($request, [
            'amount' => ['required', 'numeric', 'min:50'],
            'user_id' => 'required'
        ]);
        $user = User::where('uuid', $request->user_id)->first();
        $company = Auth::user();
        if($company->email == 'fasanyafemi@gmail.com') {
            $reference = "man_fund_" . Str::random(7);
            $details = "Manual funding of " . $request->amount;
          

            $this->create_transaction('Manual Funding', $reference, $details, 'credit', $request->amount, $user->id, 1, $request->amount);
            return redirect()->route('users')->with('message', 'User Credited Successfully');
    
        }
        if ($user->company_id == $company->id ) {
            $reference = "man_fund_" . Str::random(7);
            $details = "Manual funding of " . $request->amount;
            if ($company->balance < $request->amount) {
                return redirect()->back()->with('error', 'Insufficient funds');
            }

            $this->create_transaction('Manual Funding', $reference, $details, 'credit', $request->amount, $user->id, 1, $request->amount);
            $this->create_transaction('Admin Fund User', $reference, $details, 'debit', $request->amount, $company->id, 1, $request->amount);
            return redirect()->route('users')->with('message', 'User Credited Successfully');
        } else {
            return Redirect()->route('dashboard')->with('Message', 'Permission Denied');
        }
    }
    public function transactions($id)
    {
        //check if the user belongs to the brand
        $user = User::where('uuid', $id)->first();
        $company = Auth::user();
        if ($user->company_id == $company->id || $company->email == 'fasanyafemi@gmail.com') {
            $data['user'] = $user;
            $data['active'] = 'users';
            $data['transactions'] = Transaction::where('user_id', $user->id)->latest()->get();
            return view('super.user_transactions', $data);
        } else {
            return Redirect()->route('dashboard')->with('Message', 'Permission Denied');
        }
    }

    public function block_user($id)
    {
        //check if the user belongs to the brand
        $user = User::where('uuid', $id)->first();
        $company = Auth::user();
        if ($user->company_id == $company->id || $company->email == 'fasanyafemi@gmail.com') {
            if ($user->block == 1) {
                $user->block = 0;
                $user->save();
                return redirect()->back()->with('message', 'User unblocked successfully');
            } else {
                $user->block = 1;
                $user->save();
                return redirect()->back()->with('message', 'User blocked successfully');
            }
        } else {
            return Redirect()->route('dashboard')->with('Message', 'Permission Denied');
        }
    }
}
