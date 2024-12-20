<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
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
