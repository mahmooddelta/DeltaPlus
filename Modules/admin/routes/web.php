<?php

use Illuminate\Support\Facades\Route;
use Admin\Http\Controllers\Auth\LoginController;
use Admin\Http\Controllers\Auth\RegisteredUserController;

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

// Route::get('admin/dashboard', function () {
//     return view('admin::dashboard');
// });

// Route::get('/admin/list', function () {
//     return view('admin::list');
// })->name('admin.users.list.test');

// Route::resource('users', \Admin\Http\Controllers\UserController::class);





Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('admin.register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);

});

Route::prefix('admin')->middleware('auth:admin')->group(function () {


    Route::get('/dashboard', function () {
        return view('admin::dashboard');
    })->name('admin.dashboard');

//    Route::get('/users', function () {
//        return view('admin::list');
//    })->name('admin.list');

    Route::get('/users', [\Admin\Http\Controllers\UserController::class, 'index'])->name('admin.users');
    Route::delete('/users/{id}', [\Admin\Http\Controllers\UserController::class, 'delete'])->name('admin.users.delete');
    Route::get('/users/{id}', [\Admin\Http\Controllers\UserController::class, 'show'])->name('admin.users.show');
    Route::patch('/users/{id}', [\Admin\Http\Controllers\UserController::class, 'update'])->name('admin.users.update');
    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});
