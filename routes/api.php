<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix'=>'user','middleware'=>'userauth'],function(){
    Route::controller(UserController::class)->group(function(){
        Route::get('info','UserInfo');
        Route::get('ViewAllMuslims','ViewAll');
        Route::get('MuslimGraduated','MuslimGraduated');
        Route::get('MuslimStillStudying','MuslimStillStudying');
        Route::post('CreateAboutUs','CreateAboutUs');
        Route::post('CreateActivity','CreateActivity');
        Route::get('ViewAboutUss','ViewAboutUs');
    });
});

Route::controller(UserController::class)->group(function(){
        Route::get('test','cool');
        Route::get('ViewAboutUs','ViewAboutUs');
        Route::post('RegisterMuslim','RegisterMuslim');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login')->name('login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::controller(UserController::class)->group(function(){
    Route::get('ViewAllMuslims','ViewAll');
});

Route::controller(GuestController::class)->group(function(){
    Route::get('cool','test');
    Route::post('GuestSendContact','GuestSendContact');
});
