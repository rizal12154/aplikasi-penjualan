<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Kategori;
use App\Models\merk;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index() 
    {
        $master = Master::all();
        $kategori = Kategori::all();
        $merk = merk::all();
        $no = 1;
        return view('master.master', compact('master', 'kategori', 'merk'));
    }

    public function tambah()
    {
        $kategori = Kategori::all();
        $merk = merk::all();
        return view('master.tambah', compact('kategori', 'merk'));
    }

    public function tambah_master(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategori, id',
            'merk_id' => 'required|exists:kategori,id',
            'nama_barang' => 'required|string|max:255',
            'stok' => 'required|numeric|min:0',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0'
        ]);

        $data = $request->only(['kategori_id', 'merk_id', 'nama_barang', 'stok', 'harga_beli', 'harga_jual']);

        Master::create($data);
        return redirect('/master_barang')->with('success', 'Produk Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $master = Master::findOrFail($id);
        return view('master.master_barang', compact('master'));
    }
}
