<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function penjualan()
    {
        $transaksi = Transaksi::with(['pelanggan', 'kasir', 'detailTransaksi'])->get();
        return view('penjualan.index', compact('transaksi'));
    }

    public function tambah_penjualan()
    {
        $pelanggan = Pelanggan::all();
        return view('penjualan.tambah_penjualan', compact('pelanggan'));
    }

    public function history()
    {
        $transaksi = Transaksi::with(['pelanggan', 'kasir'])
            ->orderBy('tanggal', 'desc')
            ->get();
        return view('penjualan.history.history', compact('transaksi'));
    }

    public function detail_penjualan($id)
    {
        $transaksi = Transaksi::with(['detailTransaksi.barang', 'pelanggan', 'kasir'])
            ->findOrFail($id);
        return view('penjualan.detail', compact('transaksi'));
    }

    public function pelanggan()
    {
        $pelanggan = Pelanggan::withCount('transaksi')->get();
        return view('penjualan.data_pelanggan.pelanggan', compact('pelanggan'));
    }
}
