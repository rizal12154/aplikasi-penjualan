<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Merk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //Barang Start
    public function barang()
    {
        $barang = Barang::with(['kategori', 'merk'])->get();
        $no = 1;
        return view('barang.index', compact('barang', 'no'));
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
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'id_merk' => 'required|exists:merk,id_merk',
            'kode_barang' => 'required|string|unique:barang,kode_barang',
            'nama_barang' => 'required|string',
            'harga_beli' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
        ]);

        $data = [
            'id_kategori' => $request->id_kategori,
            'id_merk' => $request->id_merk,
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok
        ];

        Barang::create($data);
        return redirect('/barang')->with('success', 'Barang Telah Ditambahkan');
    }

    // Kategori Start
    public function kategori()
    {
        $kategori = Kategori::all();
        $no = 1;
        return view('barang.kategori.kategori', compact('kategori', 'no'));
    }

    public function kategori_tambah()
    {
        return view('barang.kategori.tambah');
    }

    public function kategori_store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        $data = $request->only(['nama']);

        Kategori::create($data);
        return redirect('/kategori')->with('success', 'Kategori Telah Ditambahkan');
    }

    //Kategori End

    //Merk Start
    public function merk()
    {
        $merk = Merk::all();
        $no = 1;
        return view('barang.merk.merk', compact('merk', 'no'));
    }

    public function merk_tambah()
    {
        return view('barang.merk.tambah');
    }

    public function merk_store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        $data = [
            'nama' => $request->nama,
        ];

        Merk::create($data);
        return redirect('/merk')->with('success', 'Merk Telah di Tambahkan');
    }

    //Merk End
}
