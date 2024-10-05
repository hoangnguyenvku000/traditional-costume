<?php

use App\Http\Controllers\AccountController;
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

Route::get('/login', function () {
    return view('account.login');
});

Route::get('/register', function () {
    return view('account.register');
});

Route::get('/account', function () {
    return view('account.account');
});
Route::get('/view_cart', function () {
    return view('view_cart');
});
Route::get('/logOut', 'AccountController@logOut');
