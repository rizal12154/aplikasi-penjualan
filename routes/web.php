<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/penjualan', [PenjualanController::class, 'penjualan']);
Route::get('/history', [PenjualanController::class, 'history']);
Route::get('/pelanggan', [PenjualanController::class, 'pelanggan']);

Route::get('/semua-barang', [BarangController::class, 'barang']);
Route::get('/kategori', [BarangController::class, 'kategori']);
Route::get('/merk', [BarangController::class, 'merk']);

Route::get('/laporan', [LaporanController::class, 'index']);

Route::get('/master_barang', [MasterController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);