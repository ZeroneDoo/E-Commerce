<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.dashboard');
})->name("home");

Route::get('/product/{id}', function ($id) {
    return view('main.detailproduct');
})->name("detailProduct");

Route::get('/cart', function () {
    return view('main.cart');
})->name("cart");
