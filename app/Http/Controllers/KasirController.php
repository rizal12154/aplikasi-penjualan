<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
        $detail_transaksi = DetailTransaksi::all();
        return view('kasir.index', compact('detail_transaksi'));
    }

    public function storeTransaksi($data)
    {
        $total_harga = 0;

        // Simpan transaksi
        $transaksi = Transaksi::create([
            'user_id' => auth()->id(),
            'total_harga' => $total_harga,
        ]);

        // Simpan detail transaksi
        foreach ($data['items'] as $item) {
            $barang = Barang::find($item['id']);
            $subtotal = $barang->harga_jual * $item['jumlah'];
            $total_harga += $subtotal;

            // Kurangi stok barang
            $barang->decrement('stok', $item['jumlah']);

            DetailTransaksi::create([
                'id_transaksi' => $transaksi->id,
                'id_barang' => $barang->id,
                'id_master' => $barang->id_master, // Jika ada, tambahkan id_master
                'kuantitas' => $item['jumlah'],
                'subtotal' => $subtotal,
            ]);
        }

        // Perbarui total harga transaksi
        $transaksi->update(['total_harga' => $total_harga]);

        return ['success' => true, 'transaksi_id' => $transaksi->id];
    }

    public function nota($id)
    {
        $transaksi = Transaksi::with('details.barang')->findOrFail($id);
        return view('kasir.nota', compact('transaksi'));
    }
}
