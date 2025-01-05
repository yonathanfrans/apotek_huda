<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot-password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('forgot-password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset-password');
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('reset-password.post');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

Route::get('/loginAdmin', function () {
    return view('admin/login');
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('forgot', function () {
    return view('forgot');
})->name('forgot');

Route::get('reset', function () {
    return view('reset');
})->name('reset');

Route::get('product', function () {
    return view('product');
});

Route::get('overview', function () {
    return view('overview');
})->name('overview');

Route::get('upload', function () {
    return view('upload');
});

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('cart', function () {
    return view('cart');
})->name('cart');

Route::post('/upload-resep', [ResepController::class, 'uploadResep'])->name('upload.resep');

Route::get('/register', [PelangganController::class, 'create'])->name('register');
Route::post('/register', [PelangganController::class, 'store']);

Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route::get('/login', [AuthController::class, 'showLoginForm'])->middleware('guest')->name('login');