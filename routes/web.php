<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/', [ProductController::class, 'ProductOverview']);

Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot-password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('forgot-password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset-password');
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('reset-password.post');

// product
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/products', [ProductController::class, 'index'])->middleware('auth');
Route::get('/admin/product/{id}', [ProductController::class, 'show'])->middleware('auth');
Route::post('/admin/create-product', [ProductController::class, 'store'])->middleware('auth');
Route::post('/admin/edit-product', [ProductController::class, 'update'])->middleware('auth');
Route::delete('/admin/delete-product/{id}', [ProductController::class, 'destroy'])->middleware('auth');

// voucher
Route::get('/admin/vouchers', [DiscountController::class, 'index'])->middleware('auth');
Route::get('/admin/voucher/{id}', [DiscountController::class, 'show'])->middleware('auth');
Route::post('/admin/create-voucher', [DiscountController::class, 'store'])->middleware('auth');
Route::post('/admin/edit-voucher', [DiscountController::class, 'update'])->middleware('auth');
Route::delete('/admin/delete-voucher/{id}', [DiscountController::class, 'destroy'])->middleware('auth');

// resep
Route::get('/admin/recipes', [RecipeController::class, 'index'])->middleware('auth');
Route::get('/admin/recipe/{id}', [RecipeController::class, 'show'])->middleware('auth');
Route::delete('/admin/delete-recipe/{id}', [RecipeController::class, 'destroy'])->middleware('auth');

// pesanan
Route::get('/admin/orders', [OrderController::class, 'index'])->middleware('auth');
Route::get('/admin/order/{id}', [OrderController::class, 'show'])->middleware('auth');
Route::post('/admin/edit-order', [OrderController::class, 'update'])->middleware('auth');
Route::delete('/admin/delete-order/{id}', [OrderController::class, 'destroy'])->middleware('auth');



// kategori
Route::get('/admin/categories', [CategoryController::class, 'index'])->middleware('auth');

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

// Route::get('product', function () {
//     return view('product');
// });

Route::get('/products', [ProductController::class, 'showProductsForUser'])->name('products.index');
Route::get('/product/{id}', [ProductController::class, 'tampilkan'])->name('product.tampilkan');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');

// Route untuk menambahkan produk ke keranjang
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');

// Route untuk halaman keranjang
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('overview', function () {
    return view('overview');
})->name('overview');

Route::get('upload', function () {
    return view('upload');
})->name('upload');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/checkout', [CartController::class, 'showCheckout'])->name('checkout');

Route::get('cart', function () {
    return view('cart');
})->name('cart');

Route::post('/cart/update/{productId}', [CartController::class, 'updateQuantity'])->name('cart.update');

Route::post('/upload-resep', [RecipeController::class, 'uploadResep'])->name('upload.resep');

// Route::get('/register', [PelangganController::class, 'create'])->name('register');
// Route::post('/register', [PelangganController::class, 'store']);

Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route::get('/login', [AuthController::class, 'showLoginForm'])->middleware('guest')->name('login');