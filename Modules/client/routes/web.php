<?php

use Illuminate\Support\Facades\Route;

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
    return view('client::frontend');
});

Route::middleware('guest')->group(function () {
    Route::get('register', [\Client\Http\Controllers\Auth\RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [\Client\Http\Controllers\Auth\RegisteredUserController::class, 'store'])
        ->name('register.store');
//
//    Route::get('login', [AuthenticatedSessionController::class, 'create'])
//        ->name('login');
//
//    Route::post('login', [AuthenticatedSessionController::class, 'store']);
//
//    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
//        ->name('password.request');
//
//    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
//        ->name('password.email');
//
//    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
//        ->name('password.reset');
//
//    Route::post('reset-password', [NewPasswordController::class, 'store'])
//        ->name('password.store');
});

//Route::group(['namespace' => 'Auth'], function () {
//    Route::get('register', 'RegisterController@showRegistrationForm')->name('auth.register.form');
//    Route::post('register', 'RegisterController@register')->name('auth.register');
//});

