<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('homepage');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showForm')->name('login')->middleware(['guest']);
    Route::post('/login', 'post')->name('login.post');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'showForm')->name('register')->middleware(['guest']);
    Route::post('/register', 'post')->name('register.post');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product', 'index')->name('product.index');
        Route::get('/create', 'create')->name('product.create');
        Route::post('/product', 'store')->name('product.store');
        Route::get('/product/edit/{product}', 'edit')->name('product.edit');
        Route::post('/product/update/{product}', 'update')->name('product.update');
        Route::get('/product/delete/{product}', 'destroy')->name('product.delete');

        Route::get('/search', 'search')->name('product.search');
    });

    Route::controller(TransactionController::class)->group(function () {
        Route::get('/transactions', 'index')->name('transaction.index');
        Route::get('/transactions/create', 'create')->name('transaction.create');
        Route::post('/transactions', 'store')->name('transaction.store');
        Route::get('/transaction/search', 'search')->name('transaction.search');
    });
});
