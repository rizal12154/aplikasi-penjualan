<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $transaksi = transaksi::when($startDate, function ($query) use ($startDate) {
            return $query->where('tanggal', '>=', $startDate);
        })
            ->when($endDate, function ($query) use ($endDate) {
                return $query->where('tanggal', '<=', $endDate);
            })
            ->get();

        return view('laporan.laporan', compact('transaksi'));
    }

    public function export()
    {
        // Logic untuk export data ke Excel
    }
}
