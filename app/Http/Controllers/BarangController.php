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
        return view('barang.tambah');
    }

    public function store_barang(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required|exists:kategori, id',
            'id_merk' => 'required|exists:merk, id',
            'kode_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric',
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
