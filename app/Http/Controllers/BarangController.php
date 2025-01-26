<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Merk;
use App\Models\Master;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BarangController extends Controller
{
    // Barang Start
    public function barang()
    {
        $barang = Barang::with(['kategori', 'merk'])->get();
        return view('barang.index', [
            'barang' => $barang,
            'no' => 1
        ]);
    }

    public function tambah_barang()
    {
        $merk = Merk::all();
        $kategori = Kategori::all();
        return view('barang.tambah', compact('merk', 'kategori'));
    }

    public function store_barang(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required|exists:kategori,id',
            'id_merk' => 'required|exists:merk,id',
            'kode_barang' => 'required|string|unique:barang,kode_barang',
            'nama_barang' => 'required|string',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'stok_minimum' => 'nullable|integer|min:0',
            'stok_maksimum' => 'nullable|integer|min:0',
        ]);

        // Buat master barang terlebih dahulu
        $masterBarang = Master::create([
            'kode_master' => 'MST-' . Str::upper(Str::random(6)),
            'nama_master' => $request->nama_barang,
            'id_kategori' => $request->id_kategori,
            'id_merk' => $request->id_merk,
            'status' => 'aktif'
        ]);

        // Buat barang dengan referensi ke master barang
        $barang = Barang::create([
            'id_master' => $masterBarang->id_master,
            'id_kategori' => $request->id_kategori,
            'id_merk' => $request->id_merk,
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok,
            'stok_minimum' => $request->stok_minimum ?? 0,
            'stok_maksimum' => $request->stok_maksimum ?? 0,
            'status' => 'aktif'
        ]);

        return redirect()->route('barang.index')
            ->with('success', 'Barang Telah Ditambahkan');
    }

    // Kategori Start
    public function kategori()
    {
        $kategori = Kategori::all();
        return view('barang.kategori.kategori', [
            'kategori' => $kategori,
            'no' => 1
        ]);
    }

    public function kategori_tambah()
    {
        return view('barang.kategori.tambah');
    }

    public function kategori_store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:kategori,nama'
        ]);

        Kategori::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('barang.kategori.index')
            ->with('success', 'Kategori Telah Ditambahkan');
    }

    // Merk Start
    public function merk()
    {
        $merk = Merk::all();
        return view('barang.merk.merk', [
            'merk' => $merk,
            'no' => 1
        ]);
    }

    public function merk_tambah()
    {
        return view('barang.merk.tambah');
    }

    public function merk_store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:merk,nama'
        ]);

        Merk::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('barang.merk.index')
            ->with('success', 'Merk Telah Ditambahkan');
    }
}
