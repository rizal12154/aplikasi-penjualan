<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function penjualan()
    {
        return view('penjualan.index');
    }

    public function history()
    {
        return view('penjualan.history.history');
    }

    public function pelanggan()
    {
        return view('penjualan.data_pelanggan.pelanggan');
    }
}
