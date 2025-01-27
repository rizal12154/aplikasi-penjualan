<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    // Penjualan
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

    //History Penjualan
    public function history()
    {
        $transaksi = Transaksi::with(['pelanggan', 'kasir'])
            ->orderBy('tanggal', 'desc')
            ->get();
        return view('penjualan.history.history', compact('transaksi'));
    }

    // Detail Penjualan
    public function detail_penjualan($id)
    {
        $transaksi = Transaksi::with(['detailTransaksi.barang', 'pelanggan', 'kasir'])
            ->findOrFail($id);
        return view('penjualan.detail', compact('transaksi'));
    }

    //pelanggan
    public function pelanggan()
    {
        $pelanggan = Pelanggan::withCount('transaksi')->get();
        $no = 1;
        return view('penjualan.data_pelanggan.pelanggan', compact('pelanggan', 'no'));
    }

    public function tambah_pelanggan()
    {
        return view('penjualan.data_pelanggan.tambah');
    }

    public function store_pelanggan(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string',
            'kontak' => 'nullable|string|max:15',
            'email' => 'nullable|email'
        ], [
            'nama.required' => 'Nama pelanggan wajib diisi',
            'nama.string' => 'Nama pelanggan harus berupa string',
            'nama.max' => 'Nama pelanggan maksimal 255 karakter',
            'alamat.string' => 'Alamat harus berupa string',
            'kontak.string' => 'kontak harus berupa string',
            'kontak.max' => 'kontak maksimal 15 karakter',
            'email.email' => 'Email tidak valid'
        ]);

        $data = $request->only(['nama', 'alamat', 'kontak', 'email']); 

        Pelanggan::create($data);
        return redirect()->route('penjualan.pelanggan')
            ->with('success', 'Pelanggan Berhasil Ditambahkan');
    }

    public function edit_pelanggan($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('penjualan.data_pelanggan.edit', compact('pelanggan'));
    }

    public function update_pelanggan(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string',
            'kontak' => 'nullable|string|max:15',
            'email' => 'nullable|email'
        ], [
            'nama.required' => 'Nama pelanggan wajib diisi',
            'nama.string' => 'Nama pelanggan harus berupa string',
            'nama.max' => 'Nama pelanggan maksimal 255 karakter',
            'alamat.string' => 'Alamat harus berupa string',
            'kontak.string' => 'kontak harus berupa string',
            'kontak.max' => 'kontak maksimal 15 karakter',
            'email.email' => 'Email tidak valid'
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $data = $request->only(['nama', 'alamat', 'kontak', 'email']);
        $pelanggan->update($data);
        return redirect()->route('penjualan.pelanggan')
            ->with('success', 'Pelanggan Berhasil Diupdate');
    }

    public function delete_pelanggan($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();
        return redirect()->route('penjualan.pelanggan')
            ->with('success', 'Pelanggan Berhasil Dihapus');
    }
}
