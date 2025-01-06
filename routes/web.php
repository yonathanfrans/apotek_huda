<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/product', [ProductController::class, 'index'])->middleware('auth');
Route::get('/profile', [AdminController::class, 'indexProfile'])->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


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
});