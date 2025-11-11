<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/pro_list', function () {
    return view('pro_list');
})->name('pro_list');

Route::get('/pro_view', function () {
    return view('pro_view');
})->name('pro_view');
