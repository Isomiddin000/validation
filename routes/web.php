<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// Faqat bitta sahifani ko‘rsatish uchun
Route::get('/', function () {
    return view('welcome');
});


// To‘liq CRUD yo‘nalishlar
Route::resource('product', ProductController::class)->names('product');
Route::resource('users', UserController::class)->names('users');
