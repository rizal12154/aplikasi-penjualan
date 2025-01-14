<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\Barang;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Menampilkan daftar transaksi.
     */
    public function index()
    {
        $transaksi = Transaksi::with('pelanggan')->get();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Menampilkan form tambah transaksi baru.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $barang = Barang::all();
        return view('transaksi.create', compact('pelanggan', 'barang'));
    }

    /**
     * Menampilkan detail transaksi.
     */
    public function show($id)
    {
        $transaksi = Transaksi::with('detail_transaksi.barang')->findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }
}
