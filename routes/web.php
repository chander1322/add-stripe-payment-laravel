<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\stripecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[BasicController::class,'test']);
Route::get('/stripe',[stripecontroller::class,'stripecheckout']);
Route::post('/session',[stripecontroller::class,'session']);
Route::get('/success',[stripecontroller::class,'success']);
// Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');