<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.dashboard');
})->name("home");

Route::get('/product/{id}', function ($id) {
    return view('main.detailproduct');
})->name("detailProduct");

Route::get('/cart', function () {
    return view('main.cart');
})->name("cart")->middleware("auth");

Route::get('/watchlist', function () {
    return view('main.watchlist');
})->name("watchlist");

Route::controller(AuthController::class)->group(function(){
    Route::get("/login", "viewLogin")->name("login");
    Route::post("/login", "postLogin")->name("postLogin");
    Route::post("/logout", "postLogout")->name("logout");
    Route::get("/register", "viewRegister")->name("register");
    Route::post("/register", "postRegister")->name("postRegister");
    Route::get("/reset", "viewReset")->name("resetPassword");
});

Route::get("/profile", function(){
    return view('main.profile');
})->name("profile");

Route::get("/order", function(){
    return view('main.orders');
})->name("order");

Route::controller(BarangController::class)->group(function(){
    Route::get("/barang", "formBarang")->name("formBarang");
    Route::post("/barang", "createBarang")->name("createBarang");
});