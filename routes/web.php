<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\UserController;


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
    });
});