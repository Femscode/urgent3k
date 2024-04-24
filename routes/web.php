<?php

use App\Models\Data;
use App\Models\User;
use App\Models\Cable;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BulkSMSController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\LoginWithGoogleController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', [BusinessController::class, 'index'])->name('homepage');

Route::get('/asset-location', function () {
    $publicPath = public_path();

    return $publicPath;
});

require __DIR__ . '/auth.php';
// Auth::routes();
Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


Route::any('/upgrade/{id}', [BusinessController::class, 'upgrade'])->name('upgrade');
Route::any('/saveBeneficiary', [BusinessController::class, 'saveBeneficiary'])->name('saveBeneficiary');
Route::any('/removeBeneficiary', [BusinessController::class, 'removeBeneficiary'])->name('removeBeneficiary');


//the subdomain website routes
Route::middleware(['auth'])->group(function () {
    // Auth::routes();


    Route::any('confirm_account', [HomeController::class, 'confirm_account'])->name('confirm_account');
    Route::any('make_withdraw', [HomeController::class, 'make_withdraw'])->name('make_withdraw');
    
    

    Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
    Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
    Route::get('/my-loans', [FundController::class, 'myloans'])->name('myloans');
    Route::get('/requestfund', [FundController::class, 'requestfund'])->name('requestfund');
    Route::get('/makepayment/{id}', [FundController::class, 'makepayment'])->name('makepayment');
    Route::get('/loaninfo/{id}', [FundController::class, 'loaninfo'])->name('loaninfo');
    Route::post('/payloan', [FundController::class, 'payloan'])->name('payloan');
    Route::post('/saveloan', [FundController::class, 'saveloan'])->name('saveloan');
    Route::any('/retrieveclient', [FundController::class, 'retrieveclient'])->name('retrieveclient');
    Route::any('/deleteloan/{id}', [FundController::class, 'deleteloan'])->name('deleteloan');
    Route::any('/cancelloan/{id}', [FundController::class, 'cancelloan'])->name('cancelloan');
    Route::any('/uncancelloan/{id}', [FundController::class, 'uncancelloan'])->name('uncancelloan');
    Route::any('/marksent/{id}', [FundController::class, 'marksent'])->name('marksent');
    Route::any('/markreceived/{id}', [FundController::class, 'markreceived'])->name('markreceived');
   //withdrawer
    Route::any('/withdraw/{id}', [FundController::class, 'withdraw'])->name('withdraw');
    Route::any('confirm_account', [HomeController::class, 'confirm_account'])->name('confirm_account');
    Route::any('make_transfer', [HomeController::class, 'make_transfer'])->name('make_transfer');
    Route::any('make_withdraw', [HomeController::class, 'make_withdraw'])->name('make_withdraw');
    


    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::post('/process_order', [App\Http\Controllers\HomeController::class, 'process_order'])->name('process_order');
    Route::get('/delete_order', [App\Http\Controllers\HomeController::class, 'delete_order'])->name('delete_order');
    Route::post('/updateprofile', [App\Http\Controllers\HomeController::class, 'updateprofile'])->name('updateprofile');
    // Route::post('/kycreg', [App\Http\Controllers\HomeController::class, 'kycreg'])->name('kycreg');
    Route::post('/setpin', [App\Http\Controllers\HomeController::class, 'setpin'])->name('setpin');
    Route::get('profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('myloans', [App\Http\Controllers\HomeController::class, 'myloans'])->name('myloans');
    // Route::get('kyc', [App\Http\Controllers\HomeController::class, 'kyc'])->name('kyc');
    Route::get('user-fundwallet', [App\Http\Controllers\HomeController::class, 'fundwallet'])->name('fundwallet');


    Route::post('/checkout/{checkout?}', [App\Http\Controllers\FundingController::class, 'checkout'])->name('checkout');
    // Route::get('withdraw', [App\Http\Controllers\HomeController::class, 'withdraw'])->name('withdraw');
    // Route::any('confirm_account', [HomeController::class, 'confirm_account'])->name('confirm_account');
    // Route::any('make_transfer', [HomeController::class, 'make_transfer'])->name('make_transfer');

    Route::get('resend_verification', [App\Http\Controllers\HomeController::class, 'resend_verification'])->name('resend_verification');
    Route::get('transactions', [App\Http\Controllers\HomeController::class, 'transactions'])->name('transactions');
    Route::get('activities', [App\Http\Controllers\HomeController::class, 'activities'])->name('activities');
    Route::get('premium-bulksms_transactions', [App\Http\Controllers\HomeController::class, 'bulksms_transactions'])->name('bulksms_transactions');
    Route::get('analysis', [App\Http\Controllers\HomeController::class, 'analysis'])->name('analysis');
    Route::post('changePhoneAnalysis', [App\Http\Controllers\HomeController::class, 'analysis'])->name('analysis');
    Route::get('transfer', [App\Http\Controllers\FundingController::class, 'transfer'])->name('transfer');
    // Route::get('pay_cttaste/{slug}', [App\Http\Controllers\FundingController::class, 'pay_cttaste'])->name('pay_cttaste');
    // Route::post('make_transfer', [App\Http\Controllers\FundingController::class, 'make_transfer'])->name('make_transfer');
    Route::post('pay_for_order', [App\Http\Controllers\FundingController::class, 'pay_for_order'])->name('pay_for_order');
    Route::post('verify_id', [App\Http\Controllers\FundingController::class, 'verify_id'])->name('verify_id');
    Route::post('verify_order', [App\Http\Controllers\FundingController::class, 'verify_order'])->name('verify_order');
    Route::post('/pay', [App\Http\Controllers\FundingController::class, 'redirectToGateway'])->name('pay');
    Route::get('/payment/callback', [App\Http\Controllers\FundingController::class, 'handleFLWCallback']);
    Route::get('/reserve_account', [App\Http\Controllers\FundingController::class, 'reserve_account']);
    Route::post('monnify/transaction_complete', [App\Http\Controllers\MonnifyController::class, 'monnifyTransactionComplete2']);
    //subscription routes
    Route::get('/view_details/{id}', [BulkSMSController::class, 'viewDetails'])->name('view_details');

    //groups
    Route::get('/data_group', [App\Http\Controllers\GroupController::class, 'data_group'])->name('data_group');

    Route::post('/live_add', [App\Http\Controllers\PayrollController::class, 'live_add'])->name('live_add');
    // Payrll and payee 
    Route::get('/support', [App\Http\Controllers\HomeController::class, 'support'])->name('support');


    //new routes
    Route::any('/resetpassword', [App\Http\Controllers\UserController::class, 'resetpassword'])->name('resetpassword');
    Route::any('/change-password', [App\Http\Controllers\UserController::class, 'changepassword'])->name('change-password');
    Route::any('/resetpin', [App\Http\Controllers\UserController::class, 'resetpin'])->name('resetpin');
    Route::any('/user-change-pin', [App\Http\Controllers\UserController::class, 'changepin'])->name('change-pin');
    Route::any('/forgot-pin', [App\Http\Controllers\UserController::class, 'forgotpin'])->name('forgot-pin');
    Route::any('/reset-pin-with-token', [App\Http\Controllers\UserController::class, 'resetPinWithToken'])->name('reset-pin-with-token');
    Route::any('/reset-forgot-pin', [App\Http\Controllers\UserController::class, 'resetforgotpin'])->name('reset-forgot-pin');
    Route::any('/print_transaction_receipt/{id}', [App\Http\Controllers\UserController::class, 'print_transaction_receipt'])->name('print_transaction_receipt');

    // Email Verification Routes...
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware(['auth'])->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/home');
    })->middleware(['auth', 'signed', 'throttle:6,1'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');


    //the business domain start

    Route::get('home', [HomeController::class, 'dashboard'])->name('admin_home')->name('dashboard');
    
    // Route::post('/updateprofile', [BusinessController::class, 'updateprofile'])->name('updateprofile');
    Route::get('/change_password', [BusinessController::class, 'change_password'])->name('change_password');
    Route::any('/select_theme', [BusinessController::class, 'select_theme'])->name('select_theme');
    Route::any('/notifications', [BusinessController::class, 'notifications'])->name('notifications');
    Route::any('/update_notification', [BusinessController::class, 'update_notification'])->name('update_notification');
    Route::any('/users', [BusinessController::class, 'user_management'])->name('users');
    Route::any('/fund_wallet/{id}', [BusinessController::class, 'fund_wallet'])->name('fund_wallet');
    Route::any('/transactions/{id}', [BusinessController::class, 'transactions'])->name('transactions');
    Route::any('/block_user/{id}', [BusinessController::class, 'block_user'])->name('transactions');


    Route::any('/verify_transaction/{ref?}', [SubscriptionController::class, 'verify_transaction'])->name('verify_transaction');
    Route::any('/check_verify_transaction', [SubscriptionController::class, 'check_verify_transaction'])->name('check_verify_transaction');

    Route::get('fundwallet', [BusinessController::class, 'fundwallet'])->name('fundwallet');
    Route::post('generatePermanentAccount', [FundingController::class, 'generatePermanentAccount'])->name('generatePermanentAccount');
    Route::post('/checkout', [App\Http\Controllers\FundingController::class, 'admin_checkout'])->name('admin_checkout');

    Route::get('payment_transactions', [BusinessController::class, 'payment_transactions'])->name('payment_transactions');
    Route::get('purchase_transactions', [BusinessController::class, 'purchase_transactions'])->name('purchase_transactions');
    Route::get('pending_transactions', [BusinessController::class, 'pending_transactions'])->name('pending_transactions');
    Route::get('mytransactions', [BusinessController::class, 'mytransactions'])->name('mytransactions');


    Route::post('/setpin', [App\Http\Controllers\HomeController::class, 'setpin'])->name('setpin');
    Route::any('/resetpin', [App\Http\Controllers\UserController::class, 'resetpin'])->name('resetpin');
    Route::any('/change-pin', [App\Http\Controllers\UserController::class, 'admin_changepin'])->name('change-pin');
    Route::any('/forgot-pin', [App\Http\Controllers\UserController::class, 'forgotpin'])->name('forgot-pin');
    Route::any('/reset-pin-with-token', [App\Http\Controllers\UserController::class, 'resetPinWithToken'])->name('reset-pin-with-token');
    Route::any('/reset-forgot-pin', [App\Http\Controllers\UserController::class, 'resetforgotpin'])->name('reset-forgot-pin');
    Route::any('/print_transaction_receipt/{id}', [App\Http\Controllers\UserController::class, 'print_transaction_receipt'])->name('print_transaction_receipt');





    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware(['auth'])->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/home');
    })->middleware(['auth', 'signed', 'throttle:6,1'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

    // Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');



    Route::get('withdraw', [BusinessController::class, 'withdraw'])->name('admin_withdraw');
    Route::post('/pay', [App\Http\Controllers\FundingController::class, 'redirectToGateway'])->name('admin_pay');
    Route::get('/payment/callback', [App\Http\Controllers\FundingController::class, 'handleGatewayCallback']);
    Route::get('/reserve_account', [App\Http\Controllers\FundingController::class, 'reserve_account']);
    Route::post('monnify/transaction_complete', [App\Http\Controllers\MonnifyController::class, 'monnifyTransactionComplete2']);

    //subscription routes

    Route::group(['middleware' => 'auth'], function () {
        // Route::any('/run_schedule_purchase', [App\Http\Controllers\SubscriptionController::class, 'run_schedule_purchase'])->name('run_schedule_purchase');
        Route::any('/superadmin', [App\Http\Controllers\SuperController::class, 'index'])->name('superadmin');
        Route::any('/sendreminder', [App\Http\Controllers\SuperController::class, 'sendreminder'])->name('sendreminder');
        Route::any('/addinterest', [App\Http\Controllers\SuperController::class, 'addinterest'])->name('addinterest');
        Route::any('/alltransactions', [App\Http\Controllers\SuperController::class, 'transactions'])->name('alltransactions');
        Route::any('/allloans', [App\Http\Controllers\SuperController::class, 'allloans'])->name('allloans');
        Route::any('/pendingloans', [App\Http\Controllers\SuperController::class, 'pendingloans'])->name('pendingloans');
        Route::any('/rejectedloans', [App\Http\Controllers\SuperController::class, 'rejectedloans'])->name('rejectedloans');
        Route::any('/approvedloans', [App\Http\Controllers\SuperController::class, 'approvedloans'])->name('approvedloans');
        Route::any('/paidloans', [App\Http\Controllers\SuperController::class, 'paidloans'])->name('paidloans');
        Route::any('/allusers', [App\Http\Controllers\SuperController::class, 'allusers'])->name('allusers');
        Route::any('/schedule_accounts', [App\Http\Controllers\SuperController::class, 'schedule_accounts'])->name('schedule_accounts');
        Route::any('/admin_giveaway', [App\Http\Controllers\SuperController::class, 'admin_giveaway'])->name('admin_giveaway');
        Route::any('/all_payment_transactions', [App\Http\Controllers\SuperController::class, 'payment_transactions'])->name('all_payment_transactions');
        Route::any('/all_withdrawals', [App\Http\Controllers\SuperController::class, 'all_withdrawals'])->name('all_withdrawals');
        Route::any('/markpaid/{id}', [App\Http\Controllers\SuperController::class, 'markpaid'])->name('markpaid');
        Route::any('/approve_loan/{id}', [App\Http\Controllers\SuperController::class, 'approve_loan'])->name('approve_loan');
        Route::any('/revert_loan/{id}', [App\Http\Controllers\SuperController::class, 'revert_loan'])->name('revert_loan');
        Route::any('/user_management', [App\Http\Controllers\SuperController::class, 'user_management'])->name('user_management');
        Route::any('/user_transaction/{id}', [App\Http\Controllers\SuperController::class, 'user_transaction'])->name('user_transaction');
        Route::any('/data_price', [App\Http\Controllers\SuperController::class, 'data_price'])->name('data_price');
        Route::any('/plan_status', [App\Http\Controllers\SuperController::class, 'plan_status'])->name('plan_status');
        Route::any('/plan_status/{network_id}/{type}', [App\Http\Controllers\SuperController::class, 'update_plan_status'])->name('update_plan_status');
        Route::any('/update_data', [App\Http\Controllers\SuperController::class, 'update_data'])->name('update_data');
        Route::any('/cable_price', [App\Http\Controllers\SuperController::class, 'cable_price'])->name('cable_price');
        Route::any('/update_cable', [App\Http\Controllers\SuperController::class, 'update_cable'])->name('update_cable');
        Route::any('/block_user/{id}', [App\Http\Controllers\SuperController::class, 'block_user'])->name('block_user');
        Route::any('/upgrade_user/{id}', [App\Http\Controllers\SuperController::class, 'upgrade_user'])->name('upgrade_user');
        Route::any('/duplicate_transactions/', [App\Http\Controllers\SuperController::class, 'duplicate_transactions'])->name('duplicate_transactions');
        Route::any('/contact_gain/', [App\Http\Controllers\SuperController::class, 'contact_gain'])->name('contact_gain');
        Route::any('/downloadCSV/', [App\Http\Controllers\SuperController::class, 'downloadCSV'])->name('downloadCSV');
        Route::any('/admin_delete_duplicate/{type}/{id}', [App\Http\Controllers\SubscriptionController::class, 'admin_delete_duplicate'])->name('admin_delete_duplicate');
    });
});
Route::get('/{slug}', [FundController::class, 'slug'])->name('slug')->middleware('auth');

//business domain end
//the subdomains
// Route::domain('{subdomain}.localhost')->middleware(['subdomain.auth'])->group(function () {
