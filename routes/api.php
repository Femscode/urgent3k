<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    
    return $request->user();
});



Route::any('paystack/webhook', [App\Http\Controllers\FundingController::class, 'webhook_payment_for_paystack'])->name('handlewebhook');
Route::any('flw/webhook', [App\Http\Controllers\FundingController::class, 'webhook_payment'])->name('handlewebhook');
Route::any('easywebhook', [App\Http\Controllers\FundingController::class, 'easywebhook'])->name('easywebhook');

