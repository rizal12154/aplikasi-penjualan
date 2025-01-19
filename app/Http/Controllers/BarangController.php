<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barang()
    {
        return view('barang.index');
    }

    public function kategori()
    {
        return view('barang.kategori.kategori');
    }

    public function merk()
    {
        return view('barang.merk.merk');
    }
}
