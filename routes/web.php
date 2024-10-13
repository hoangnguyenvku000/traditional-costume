<?php

// use App\Http\Controllers\AccountController;
// use App\Http\Controllers\AuthManager;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/product-list', function () {
    return view('product.product_list');
});

Route::get('/product_type', function () {
    return view('product.product_type');
});

Route::group(['prefix' => 'account'], function() {

    // Guest middleware
    Route::group(['middleware' => 'guest'], function() {
        Route::get('login', [LoginController::class, 'index'])->name('account.login');
        Route::get('register', [LoginController::class, 'register'])->name('account.register');
        Route::post('process-register', [LoginController::class, 'processRegister'])->name('account.processRegister');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
    });

    // Authentiated middleware
    Route::group(['middleware' => 'auth'], function() {
        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('home', [LoginController::class, 'home'])->name('account.home');
    });

});

// Route::get('/account', function () {
//     return view('account.account');
// });

// Route::get('/view_cart', function () {
//     return view('view_cart');
// });

// Request action
Route::post('/login', [AccountController::class, 'login']);
Route::post('/register', [AccountController::class, 'register']);