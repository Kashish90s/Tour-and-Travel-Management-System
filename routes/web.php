<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\laravelMail;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\signupVerification;
use App\Http\Controllers\booking_controller;
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




// Route::get('/aa',function(){
//     return view('admindash');
// });

Route::match(['get', 'post'], '/', function () {
    return view('dashboard');
});


// !!-------------------------redirect route--------------------------------------------------------------------!!

Route::view('/signupp', 'signup')->name('signup');
Route::view('/forget', 'forgot')->name('forgot');
Route::view('/booking', 'booking')->name('booking');
Route::view('/otp', 'verifyEmail')->name('verifyEmail');
Route::view('/signup_emailcheck', 'signup_emailVerify')->name('signup_emailcheck');
Route::view('/admindashboard', 'admindash')->name('admindashboard');



// ---------------------------User Profile ----------------------------------------------------------------------

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'edit');
    Route::post('/password', 'changePassword');
    Route::post('/account', 'update')->name('update');
    Route::post('/delete', 'deleteAccount')->name('AccountDeletation');
});



// ----------------------------- Login -----------------------------------------------------------------------------


Route::controller(login_controller::class)->group(function () {
    Route::post('/user', 'userlogin');
    Route::get('/logout','userlogout');
});


//-----------------------------------

Route::controller(user_controller::class)->group(function () {
    Route::post('/userSignUp', 'userSignup')->name('addUser');
    // Route::post('/userSignUp', 'userSignup')->name('verify');
});

//------------------------------------Forge Password ------------------------------------------------------------

Route::post('/check', [laravelMail::class, 'check'])->name('check');
Route::post('/verify', [laravelMail::class, 'verify'])->name('verify');
Route::post('/newPassword',[laravelMail::class, 'newPassword'])->name('newPassword');
Route::post('/resetpass', [laravelMail::class, 'resetPassword'])->name('resetpasword');



Route::get('/otp', function () {
    return view('verifyEmail');
})->name('verifyemail');

//------------------------------------Sign up verfification --------------------------------------------------------

Route::controller(signupVerification::class)->group(function () {
   Route::post('/checkEmail','checkEmail')->name('checkEmail');
   Route::post('/otpCheck','checkOtp')->name('otpCheck');
//    Route::post('/signupp','signup')->name('signup');
});



Route::get('/checkOtp', function () {
    return view('signup-otpCheck');
})->name('signup-otpCheck');


// ------------------------booking --------------------------------------------------------------------------------------

// Route::controller(booking_controller::class)->group(function(){

//     Route::post('destination','destination')->name('destination');

// });

Route::post('/destination', [booking_controller::class, 'destination'])->name('destination');














// ------------------------admin dashboard-----------------------------------------------------------



