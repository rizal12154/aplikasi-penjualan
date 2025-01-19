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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Penjualan
Route::get('/penjualan', [PenjualanController::class, 'penjualan'])->name('penjualan');

//History
Route::get('/history', [PenjualanController::class, 'history'])->name('history');

//Pelanggan
Route::get('/pelanggan', [PenjualanController::class, 'pelanggan'])->name('pelanggan');

//barang
Route::get('/semua-barang', [BarangController::class, 'barang'])->name('semua-barang');

//kategori
Route::get('/kategori', [BarangController::class, 'kategori'])->name('kategori');
Route::get('/tambah_kategori', [BarangController::class, 'kategori_tambah'])->name('kategori.tambah');
Route::post('/kategori', [BarangController::class, 'tambah_kategori'])->name('store.kategori');

//merk
Route::get('/merk', [BarangController::class, 'merk'])->name('merk');
Route::get('/tambah_merk', [BarangController::class, 'merk_tambah'])->name('merk_tambah');
Route::post('/merk', [BarangController::class, 'tambah_merk'])->name('store.merk');

//Laporan
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');

//Master Barang
Route::get('/master_barang', [MasterController::class, 'index'])->name('master');
Route::get('/tambah_master', [MasterController::class, 'tambah'])->name('tambah.master');
Route::post('/master_barang', [MasterController::class, 'tambah_master'])->name('master.store');

//User
Route::get('/user', [UserController::class, 'index'])->name('user');
