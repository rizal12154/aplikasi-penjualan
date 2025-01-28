<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\UserController;

Route::middleware('web')->group(function () {
    // Login Routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        // Penjualan
        Route::prefix('penjualan')->name('penjualan.')->group(function () {
            Route::get('/', [PenjualanController::class, 'penjualan'])->name('index');
            Route::get('/tambah_penjualan', [PenjualanController::class, 'tambah_penjualan'])->name('create');
            Route::get('/pelanggan', [PenjualanController::class, 'pelanggan'])->name('pelanggan');
            Route::get('/history', [PenjualanController::class, 'history'])->name('history');

            // CRUD Pelanggan
            Route::get('/pelanggan/create', [PenjualanController::class, 'tambah_pelanggan'])->name('tambah-pelanggan');
            Route::post('/pelanggan', [PenjualanController::class, 'store_pelanggan'])->name('pelanggan.store');
            Route::get('/pelanggan/{id}/edit', [PenjualanController::class, 'edit_pelanggan'])->name('edit-pelanggan');
            Route::put('/pelanggan/{id}', [PenjualanController::class, 'update_pelanggan'])->name('pelanggan.update');
            Route::delete('/pelanggan/{id}', [PenjualanController::class, 'destroy_pelanggan'])->name('delete-pelanggan');
        });
        
        // Barang
        Route::prefix('barang')->name('barang.')->group(function () {
            // Barang
            Route::get('/', [BarangController::class, 'barang'])->name('index');
            Route::get('/create', [BarangController::class, 'tambah_barang'])->name('create');
            Route::post('/', [BarangController::class, 'store_barang'])->name('store');
            Route::get('/{id}/edit', [BarangController::class, 'edit_barang'])->name('edit');
            Route::put('/{id}', [BarangController::class, 'update_barang'])->name('update');
            Route::delete('/{id}', [BarangController::class, 'destroy_barang'])->name('destroy');
            Route::patch('/update-status', [BarangController::class, 'updateStatusBarang'])->name('update-status');

            // Kategori
            Route::prefix('kategori')->name('kategori.')->group(function () {
                Route::get('/', [BarangController::class, 'kategori'])->name('index');
                Route::get(
                    '/create',
                    [BarangController::class, 'kategori_tambah']
                )->name('create');
                Route::post('/', [BarangController::class, 'kategori_store'])->name('store');
            });

            // Merk
            Route::prefix('merk')->name('merk.')->group(function () {
                Route::get('/', [BarangController::class, 'merk'])->name('index');
                Route::get('/create', [BarangController::class, 'merk_tambah'])->name('create');
                Route::post('/', [BarangController::class, 'merk_store'])->name('store');
            });
        });

        // Laporan
        Route::get('/laporan/penjualan', [LaporanController::class, 'index'])->name('laporan.penjualan');
        Route::get('/laporan/penjualan/export', [LaporanController::class, 'export'])->name('laporan.penjualan.export');

        //kasir
        Route::prefix('kasir')->name('kasir.')->group(function () {
            Route::get('/', [KasirController::class, 'index'])->name('index');
            Route::post('/transaksi', [KasirController::class, 'storeTransaksi'])->name('store.transaksi');
            Route::get('/nota/{id}', [KasirController::class, 'nota'])->name('nota');
        });

        // Master Barang
        Route::prefix('master')->name('master.')->group(function () {
            Route::get('/', [MasterController::class, 'index'])->name('index'); // Sesuai
            Route::get('/create', [MasterController::class, 'tambah'])->name('create'); // Disesuaikan
            Route::post('/', [MasterController::class, 'tambah_master'])->name('store'); // Disesuaikan
            Route::get('/{id}/edit', [MasterController::class, 'edit'])->name('edit'); // Sesuai
            Route::put('/{id}', [MasterController::class, 'update'])->name('update'); // Sesuai
            Route::delete('/{id}', [MasterController::class, 'delete'])->name('delete'); // Disesuaikan
        });


        // User
        Route::prefix('user')->name('user.')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::post('/', [UserController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
            Route::put('/{id}', [UserController::class, 'update'])->name('update');
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('delete');
        });
    });
});
