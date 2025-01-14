<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use App\Models\Barang;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }

    public function transaksi(Request $request)
    {
        $query = Transaksi::with(['pelanggan', 'kasir', 'detail_transaksi.barang']);

        // Filter berdasarkan tanggal
        if ($request->has('start_date') && $request->has('end_date')) {
            $query->whereBetween('tanggal', [$request->start_date, $request->end_date]);
        }

        $transaksi = $query->get();

        return view('laporan.transaksi', compact('transaksi'));
    }

    public function stokBarang()
    {
        $barang = Barang::with(['kategori', 'merk'])->get();

        return view('laporan.stok_barang', compact('barang'));
    }

    // public function generateTransaksiPDF(Request $request)
    // {
    //     $query = Transaksi::with(['pelanggan', 'kasir', 'detail_transaksi.barang']);

    //     // Filter berdasarkan tanggal
    //     if ($request->has('start_date') && $request->has('end_date')) {
    //         $query->whereBetween('tanggal', [$request->start_date, $request->end_date]);
    //     }

    //     $transaksi = $query->get();

    //     $pdf = \PDF::loadView('laporan.pdf_transaksi', compact('transaksi'));
    //     return $pdf->download('laporan_transaksi.pdf');
    // }

    // public function generateStokBarangPDF()
    // {
    //     $barang = Barang::with(['kategori', 'merk'])->get();

    //     $pdf = \PDF::loadView('laporan.pdf_stok_barang', compact('barang'));
    //     return $pdf->download('laporan_stok_barang.pdf');
    // }
}

