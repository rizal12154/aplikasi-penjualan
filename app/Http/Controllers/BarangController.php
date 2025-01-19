<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Merk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barang()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }


    // Kategori Start
    public function kategori()
    {
        $kategori = Kategori::all();
        return view('barang.kategori.kategori', compact('kategori'));
    }

    public function kategori_tambah()
    {
        return view('barang.kategori.tambah');
    }

    public function tambah_kategori(Request $request)
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
        return view('barang.merk.merk', compact('merk'));
    }

    public function merk_tambah()
    {
        return view('barang.merk.tambah');
    }

    public function tambah_merk(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        $data = $request->only(['nama']);

        Merk::create($data);
        return redirect('/merk')->with('success', 'Merk Telah di Tambahkan');
    }

    //Merk End
}
