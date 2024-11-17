<?php

use Admin\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Admin\Http\Controllers\Auth\LoginController;
use Admin\Http\Controllers\Auth\RegisteredUserController;


Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('admin.register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);

});

Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin::dashboard');
    })->name('dashboard');

    Route::get('/change-lang/{locale}', function ($local) {
        Session()->put('locale', $local);
        return redirect()->back();
    })->name('localization');

    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::delete('/users/{id}', [UserController::class, 'delete'])->name('users.delete');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::patch('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
});
