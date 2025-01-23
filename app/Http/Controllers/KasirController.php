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
        return view('kasir.index');
    }

    public function searchBarang(Request $request)
    {
        $search = $request->input('query');
        $barang = Barang::where('nama_barang', 'like', "%{$search}%")
            ->orWhere('kode_barang', 'like', "%{$search}%")
            ->get();

        return response()->json($barang);
    }

    public function storeTransaksi(Request $request)
    {
        // Validasi data dari request
        $data = $request->validate([
            'items' => 'required|array',
            'items.*.id' => 'required|exists:barang,id',
            'items.*.jumlah' => 'required|integer|min:1',
        ]);

        $total_harga = 0;

        // Simpan transaksi
        $transaksi = Transaksi::create([
            'user_id' => auth()->id(),
            'total_harga' => $total_harga,
        ]);

        // Iterasi setiap item dan simpan detail transaksi
        foreach ($data['items'] as $item) {
            $barang = Barang::find($item['id']);

            // Hitung subtotal
            $subtotal = $barang->harga_jual * $item['jumlah'];
            $total_harga += $subtotal;

            // Kurangi stok barang
            $barang->decrement('stok', $item['jumlah']);

            // Simpan detail transaksi
            DetailTransaksi::create([
                'id_transaksi' => $transaksi->id,
                'id_barang' => $barang->id,
                'id_master' => $barang->id_master, // Tambahkan id_master sesuai kebutuhan
                'kuantitas' => $item['jumlah'],
                'subtotal' => $subtotal,
            ]);
        }

        // Perbarui total harga transaksi
        $transaksi->update(['total_harga' => $total_harga]);

        return response()->json(['success' => true, 'transaksi_id' => $transaksi->id]);
    }

    public function nota($id)
    {
        $transaksi = Transaksi::with('details.barang')->findOrFail($id);
        return view('kasir.nota', compact('transaksi'));
    }
}
