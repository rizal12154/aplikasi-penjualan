<?php

use App\Http\Controllers\Produk;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/produk', [Produk::class, 'index']);
Route::get('/produk_tambah', [Produk::class, 'tambah']);
