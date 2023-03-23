<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\admin_controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginn ',function(){
    return view('login');
});

Route::get('/dashboard ',function(){
    return view('dashboard');
});






Route::view('/signupp','signup')->name('signup');


Route::controller(user_controller::class)->group(function () {
    Route::post('user', 'userlogin');
    Route::post('adduser', 'userSignup');

});


Route::controller(admin_controller::class)->group(function () {
    Route::post('admin', 'adminlogin');

});
Route::view('/admin','adminlogin')->name('adminlogin');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
