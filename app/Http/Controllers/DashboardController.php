<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\User; // Tambah model User

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = Barang::count();
        $totalTransaksi = Transaksi::count();
        $barangTersedia = Barang::where('stok', '>', 0)->count();
        $totalUser = User::count();

        return view('dashboard.dashboard', compact(
            'totalBarang',
            'totalTransaksi',
            'barangTersedia',
            'totalUser'
        ));
    }
}
