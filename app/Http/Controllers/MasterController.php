<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Kategori;
use App\Models\Merk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MasterController extends Controller
{
    public function index()
    {
        $master = Master::with(['kategori', 'merk'])->get();
        return view('master.master', [
            'master' => $master,
            'kategori' => Kategori::all(),
            'merk' => Merk::all(),
            'no' => 1
        ]);
    }

    public function tambah()
    {
        $kategori = Kategori::all();
        $merk = Merk::all();
        return view('master.tambah', compact('kategori', 'merk'));
    }

    public function tambah_master(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required|exists:kategori,id',
            'id_merk' => 'required|exists:merk,id',
            'nama_master' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $master = Master::create([
            'kode_master' => 'MST-' . Str::upper(Str::random(6)),
            'nama_master' => $request->nama_master,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori,
            'id_merk' => $request->id_merk,
            'status' => 'aktif'
        ]);

        return redirect()->route('master.index')
            ->with('success', 'Master Produk Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $master = Master::with(['kategori', 'merk'])->findOrFail($id);
        $kategori = Kategori::all();
        $merk = Merk::all();
        return view('master.edit', compact('master', 'kategori', 'merk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kategori' => 'required|exists:kategori,id',
            'id_merk' => 'required|exists:merk,id',
            'nama_master' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'in:aktif,non-aktif'
        ]);

        $master = Master::findOrFail($id);

        $master->update([
            'id_kategori' => $request->id_kategori,
            'id_merk' => $request->id_merk,
            'nama_master' => $request->nama_master,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status ?? 'aktif'
        ]);

        return redirect()->route('master.index')
            ->with('success', 'Master Produk Berhasil Diperbarui');
    }

    public function delete($id)
    {
        $master = Master::findOrFail($id);
        $master->delete();
        return redirect()->route('master.index')
            ->with('success', 'Master Produk Berhasil Dihapus');
    }
}
