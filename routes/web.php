<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main.dashboard');
})->name("home");

Route::get('/product/{id}', function ($id) {
    return view('main.detailproduct');
})->name("detailProduct");

Route::get('/cart', function () {
    return view('main.cart');

    
})->name("cart");
