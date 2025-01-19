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

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

//Penjualan
Route::get('/penjualan', [PenjualanController::class, 'penjualan']);

//History
Route::get('/history', [PenjualanController::class, 'history']);

//Pelanggan
Route::get('/pelanggan', [PenjualanController::class, 'pelanggan']);

//barang
Route::get('/semua-barang', [BarangController::class, 'barang']);

//kategori
Route::get('/kategori', [BarangController::class, 'kategori']);
Route::get('/tambah_kategori', [BarangController::class, 'kategori_tambah']);
Route::post('/kategori', [BarangController::class, 'tambah_kategori']);

//merk
Route::get('/merk', [BarangController::class, 'merk']);
Route::get('/tambah_merk', [BarangController::class, 'merk_tambah']);
Route::post('/merk', [BarangController::class, 'tambah_merk']);

//Laporan
Route::get('/laporan', [LaporanController::class, 'index']);

//Master Barang
Route::get('/master_barang', [MasterController::class, 'index']);
Route::get('/tambah_master', [MasterCOntroller::class, 'tambah']);
Route::post('/master_barang', [MasterController::class, 'tambah_master']);

//User
Route::get('/user', [UserController::class, 'index']);
