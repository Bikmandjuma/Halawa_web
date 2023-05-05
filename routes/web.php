<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\GuestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/AllMuslims', function () {
    return view('muslims');
})->name('muslims');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::controller(AuthController::class)->group(function () {
    Route::post('test','login')->name('login');
    Route::post('logout','Logout')->name('logout');
});

Route::controller(GuestController::class)->group(function(){
    Route::get('Register_Muslim','Show_Register_Muslim')->name('muslim_self_register');
    Route::post('RegisterMuslim','Register_Muslim');
    Route::get('checkemail','MuslimCheckEmail')->name('CheckEmailFirst');
    Route::post('CreateCheckemail','CreateCheckEmail')->name('CreateCheckEmail');
    Route::get('/checkcode/{email}','MuslimCheckCode')->name('CheckCodeFirst');
    Route::post('CreateCheckCode','CreateCheckCode')->name('CreateCheckCode');
    Route::get('/ResendCode/{email}','ResendCode')->name('ResendCode');
});

Route::group(['prefix'=>'user','middleware'=>'userauth'],function(){
    Route::controller(UserController::class)->group(function(){
        Route::get('dashboard','UserHome')->name('homepage');
        Route::get('information','MyInformation')->name('myinformation');
        Route::get('editinformation','EditMyInformation')->name('editinfo');
        Route::get('password','PasswordForm')->name('passform');
        Route::post('Submitpswdform','CreatePassword')->name('changepassword');
        Route::post('Submitprofilform','CreateProfile')->name('changeprofile');
        Route::get('profile','ShowProfile')->name('profile');
        Route::post('EditInfo/{id}','UpdateInfo')->name('editinfo');
        Route::get('form/document','DocForm');
    });
});