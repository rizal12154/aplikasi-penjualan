<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KasirController;

Route::middleware('web')->group(function () {

    // Login Routes (Not Protected)
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Protected Routes (Require Authentication)
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        // Kasir
        Route::prefix('kasir')->name('kasir.')->group(function () {
            Route::get('/', [KasirController::class, 'index'])->name('index');
            Route::get('/search-barang', [KasirController::class, 'searchBarang'])->name('search');
            Route::post('/store-transaksi', [KasirController::class, 'storeTransaksi'])->name('store');
            Route::get('/nota/{id}', [KasirController::class, 'nota'])->name('nota');
        });

        // Penjualan
        Route::prefix('penjualan')->name('penjualan.')->group(function () {
            Route::get('/penjualan', [PenjualanController::class, 'penjualan'])->name('index');
            Route::get('/history', [PenjualanController::class, 'history'])->name('history');
            Route::get('/pelanggan', [PenjualanController::class, 'pelanggan'])->name('pelanggan');
        });

        // Barang
        Route::prefix('barang')->name('barang.')->group(function () {
            Route::get('/barang', [BarangController::class, 'barang'])->name('index');
            Route::get('/tambah', [BarangController::class, 'tambah_barang'])->name('create');
            Route::post('/barang', [BarangController::class, 'store_barang'])->name('store');

            // Kategori
            Route::prefix('kategori')->name('kategori.')->group(function () {
                Route::get('/', [BarangController::class, 'kategori'])->name('index');
                Route::get('/tambah', [BarangController::class, 'kategori_tambah'])->name('create');
                Route::post('/', [BarangController::class, 'kategori_store'])->name('store');
            });

            // Merk
            Route::prefix('merk')->name('merk.')->group(function () {
                Route::get('/', [BarangController::class, 'merk'])->name('index');
                Route::get('/tambah', [BarangController::class, 'merk_tambah'])->name('create');
                Route::post('/', [BarangController::class, 'merk_store'])->name('store');
            });
        });

        // Laporan
        Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

        // Master Barang
        Route::prefix('master_barang')->name('master.')->group(function () {
            Route::get('/master', [MasterController::class, 'index'])->name('index');
            Route::get('/tambah', [MasterController::class, 'tambah'])->name('create');
            Route::post('/master', [MasterController::class, 'tambah_master'])->name('store');
        });

        // User
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
    });
});
