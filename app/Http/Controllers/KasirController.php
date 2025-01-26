<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KasirController extends Controller
{
    public function index()
    {
        $detail_transaksi = DetailTransaksi::with(['transaksi', 'barang'])->get();
        return view('kasir.index', compact('detail_transaksi'));
    }

    public function storeTransaksi(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_pelanggan' => 'nullable|exists:pelanggan,id',
            'items' => 'required|array',
            'items.*.id' => 'required|exists:barang,id',
            'items.*.jumlah' => 'required|integer|min:1',
        ]);

        try {
            DB::beginTransaction();

            $total_pembayaran = 0;

            // Siapkan data transaksi
            $transaksi = Transaksi::create([
                'id_pelanggan' => $request->id_pelanggan,
                'id_kasir' => auth()->id(),
                'tanggal' => now(),
                'total_pembayaran' => 0,
                'metode_pembayaran' => $request->metode_pembayaran ?? 'tunai',
                'catatan' => $request->catatan ?? null
            ]);

            // Proses detail transaksi
            foreach ($request->items as $item) {
                $barang = Barang::findOrFail($item['id']);

                // Hitung subtotal
                $subtotal = $barang->harga_jual * $item['jumlah'];
                $total_pembayaran += $subtotal;

                // Kurangi stok barang
                $barang->decrement('stok', $item['jumlah']);

                // Buat detail transaksi
                DetailTransaksi::create([
                    'id_transaksi' => $transaksi->id,
                    'id_barang' => $barang->id,
                    'kuantitas' => $item['jumlah'],
                    'subtotal' => $subtotal,
                ]);
            }

            // Update total pembayaran
            $transaksi->update(['total_pembayaran' => $total_pembayaran]);

            DB::commit();

            return response()->json([
                'success' => true,
                'transaksi_id' => $transaksi->id,
                'total_pembayaran' => $total_pembayaran
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Gagal membuat transaksi: ' . $e->getMessage()
            ], 500);
        }
    }

    public function nota($id)
    {
        $transaksi = Transaksi::with(['detailTransaksi.barang', 'pelanggan', 'kasir'])->findOrFail($id);
        return view('kasir.nota', compact('transaksi'));
    }
}
