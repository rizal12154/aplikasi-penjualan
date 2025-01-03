<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produk extends Controller
{
    public function index()
    {
        return view('produk.produk');
    }

    public function tambah()
    {
        return view('produk.produk_tambah');
    }
}
