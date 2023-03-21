<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::controller(DashboardController::class)->group(function(){
    Route::get('/', 'homeView')->name("home");
    Route::get('/product/{id}', 'detailProductView')->name("detailProduct");
    Route::get('/cart', "viewCart")->name("cart")->middleware("auth");
    Route::post('/cart/{id}', "postToCart")->name("addToCart")->middleware("auth");
    Route::get('/watchlist', 'viewWatchlist')->name("watchlist");
});


Route::controller(AuthController::class)->group(function(){
    Route::get("/login", "viewLogin")->name("login");
    Route::post("/login", "postLogin")->name("postLogin");
    Route::post("/logout", "postLogout")->name("logout");
    Route::get("/register", "viewRegister")->name("register");
    Route::post("/register", "postRegister")->name("postRegister");
    Route::get("/reset", "viewReset")->name("resetPassword");

    // google
    Route::get('auth/google', 'redirectToGoogle')->name('googleAuth');
    Route::get('auth/google/callback', 'handleGoogleCallback')->name('googleAuthCallback');
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

Route::get("/link_storage", function(){
    $target = storage_path("app/public");
    $link = $_SERVER['DOCUMENT_ROOT'].'/storage';
    symlink($target,$link);
});