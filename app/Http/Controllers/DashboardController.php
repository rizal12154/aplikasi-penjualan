<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        $transaksi = Transaksi::all();
        $pelanggan = Pelanggan::all();
        return view('dashboard.dashboard', compact('barang', 'transaksi', 'pelanggan'));
    }
}
