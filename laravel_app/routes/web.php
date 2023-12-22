<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hub', function () {
//     return view('layout.footer');
// });
Route::get('/', [AuthController::class, 'index']);
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/reg', [AuthController::class, 'register']);
Route::get('/log', [AuthController::class, 'display_login']);
Route::get('/status', [DonateController::class, 'payment_update']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/donate', [DonateController::class, 'donation_hub'])->middleware('auth');
Route::get('/orphan', [DonateController::class, 'orphanage_hub'])->middleware('auth');
Route::get('/payment/callback', [DonateController::class, 'handleGatewayCallback'])->middleware('auth');
Route::get('/payee', [DonateController::class, 'payment_hub'])->middleware('auth');
Route::post('/pay', [DonateController::class, 'redirectToGateway'])->name('pay')->middleware('auth');
Route::get('/profile', [DonateController::class, 'profile_hub'])->middleware('auth');
Route::get('/editprofile', [DonateController::class, 'editprofile_hub'])->middleware('auth');
Route::get('/donorlist', [DonateController::class, 'DonorPayment_list'])->middleware('auth');