<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\login_controller;

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





Route::get('/ ',function(){
    return view('dashboard');
});

Route::view('/signupp', 'signup')->name('signup');
Route::view('/profile', 'profile-setting')->name('profile');

Route::controller(login_controller::class)->group(function () {
    Route::post('/user', 'userlogin');
    Route::get('/logout','userlogout');
});

Route::controller(user_controller::class)->group(function () {
    Route::post('userSignUp', 'userSignup');
    Route::post('password', 'changePassword');
    Route::post('account', 'changeDetails');
});
