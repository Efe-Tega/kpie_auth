<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('check.auth')->group(function () {

    Route::get('/dashboard', [UserController::class, 'dashboard'])
        ->name('dashboard');

    Route::post('/profile/update', [UserController::class, 'profileUpdate'])
        ->name('profile.update');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/signup', 'create')->name('signup');
    Route::get('/login', 'index')->name('login');

    Route::post('/login', 'userLogin')->name('user.login');
    Route::post('/store', 'storeUser')->name('store.user');
    Route::post('/user/logout', 'destroy')->name('user.logout');

    // Forget & Reset Password
    Route::get('/forgot-password', 'showForgotPassword')->name('password.request');
    Route::get('/reset-password/{token}', 'resetPassword')->name('password.reset');

    Route::post('/forgot-password', 'resetLink')->name('password.email');
    Route::post('/reset-password', 'newPassword')->name('password.update');
});
