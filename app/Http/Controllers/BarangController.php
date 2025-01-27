<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Master;
use App\Models\Kategori;
use App\Models\Merk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule as Rule;

class BarangController extends Controller
{
    // Barang Start
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
        // Validasi dengan pesan custom
        $validatedData = $request->validate([
            'kode_barang' => [
                'required',
                'unique:barang,kode_barang',
                'max:255'
            ],
            'nama_barang' => [
                'required',
                'string',
                'max:255'
            ],
            'id_merk' => [
                'required',
                'exists:merk,id'
            ],
            'id_kategori' => [
                'required',
                'exists:kategori,id'
            ],
            'stok' => [
                'required',
                'integer',
                'min:0'
            ],
            'stok_minimum' => [
                'nullable',
                'integer',
                'min:0'
            ],
            'stok_maksimum' => [
                'nullable',
                'integer',
                'min:0'
            ],
            'harga_beli' => [
                'required',
                'numeric',
                'min:0'
            ],
            'harga_jual' => [
                'required',
                'numeric',
                'min:0'
            ]
        ], [
            // Pesan error custom
            'kode_barang.unique' => 'Kode barang sudah ada dalam sistem.',
            'kode_barang.required' => 'Kode barang harus diisi.',
            'nama_barang.required' => 'Nama barang harus diisi.',
            'id_merk.required' => 'Merk harus dipilih.',
            'id_kategori.required' => 'Kategori harus dipilih.',
            'stok.min' => 'Stok tidak boleh kurang dari 0.',
            'harga_beli.min' => 'Harga beli tidak boleh kurang dari 0.',
            'harga_jual.min' => 'Harga jual tidak boleh kurang dari 0.'
        ]);

        try {
            // Buat master barang
            $masterBarang = Master::create([
                'kode_master' => 'MST-' . Str::upper(Str::random(6)),
                'nama_master' => $request->nama_barang,
                'id_kategori' => $request->id_kategori,
                'id_merk' => $request->id_merk,
                'status' => $request->stok > 0 ? 'ada' : 'tidak ada'
            ]);

            // Buat barang - tanpa id_master
            $barang = Barang::create([
                'kode_barang' => $request->kode_barang,
                'nama_barang' => $request->nama_barang,
                'id_merk' => $request->id_merk,
                'id_kategori' => $request->id_kategori,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'stok' => $request->stok,
                'stok_minimum' => $request->stok_minimum ?? 0,
                'stok_maksimum' => $request->stok_maksimum ?? 0,
                'status' => 'ada'
            ]);

            $this->updateMasterStatus($masterBarang->id_master);
            $barang->load(['kategori', 'merk']);

            return redirect()->route('barang.index')
                ->with('success', 'Barang "' . $request->nama_barang . '" berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menyimpan barang: ' . $e->getMessage())
                ->withInput();
        }
    }

    private function updateMasterStatus($idMaster)
    {
        $master = Master::find($idMaster);
        $totalStok = $master->barang()->sum('stok');

        if ($totalStok <= 0) {
            $status = 'tidak ada';
        } elseif (
            $totalStok <= ($master->barang()->min('stok_minimum') ?? 0)
        ) {
            $status = 'hampir habis';
        } else {
            $status = 'ada';
        }

        $master->update(['status' => $status]);
    }

    public function updateStatusBarang()
    {
        try {
            // Ambil semua master barang
            $masters = Master::all();

            foreach ($masters as $master) {
                $this->updateMasterStatus($master->id_master);
            }

            // Update status untuk setiap barang
            $barangs = Barang::all();
            foreach ($barangs as $barang) {
                if ($barang->stok <= 0) {
                    $status = 'tidak aktif';
                } elseif ($barang->stok <= ($barang->stok_minimum ?? 0)) {
                    $status = 'hampir habis';
                } else {
                    $status = 'aktif';
                }

                $barang->update(['status' => $status]);
            }

            return redirect()->route('barang.index')
                ->with('success', 'Status barang berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal memperbarui status barang: ' . $e->getMessage());
        }
    }

    public function edit_barang($id)
    {
        $barang = Barang::with(['kategori', 'merk'])->findOrFail($id);
        $merk = Merk::all();
        $kategori = Kategori::all();
        return view('barang.edit', compact('barang', 'merk', 'kategori'));
    }

    public function update_barang(Request $request, $id)
    {

        $validatedData = $request->validate([
            'kode_barang' => [
                'required',
                'max:255',
                Rule::unique('barang', 'kode_barang')->ignore($id),
            ],
            'nama_barang' => ['required', 'string', 'max:255'],
            'id_merk' => ['required', 'exists:merk,id'],
            'id_kategori' => ['required', 'exists:kategori,id'],
            'stok' => ['required', 'integer', 'min:0'],
            'stok_minimum' => ['nullable', 'integer', 'min:0'],
            'stok_maksimum' => ['nullable', 'integer', 'min:0'],
            'harga_beli' => ['required', 'numeric', 'min:0'],
            'harga_jual' => ['required', 'numeric', 'min:0'],
            'status' => ['required', Rule::in(['ada', 'hampir habis', 'tidak ada'])],
        ]);

        try {
            $barang = Barang::findOrFail($id);
            $barang->update([
                'kode_barang' => $request->kode_barang,
                'nama_barang' => $request->nama_barang,
                'id_merk' => $request->id_merk,
                'id_kategori' => $request->id_kategori,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'stok' => $request->stok,
                'stok_minimum' => $request->stok_minimum ?? 0,
                'stok_maksimum' => $request->stok_maksimum ?? 0,
                'status' => $request->status
            ]);

            $this->updateMasterStatus($barang->id_master);
            $barang->load(['kategori', 'merk']);

            return redirect()->route('barang.index')
                ->with('success', 'Barang "' . $request->nama_barang . '" berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal memperbarui barang: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function destroy_barang($id)
    {
        try {
            $barang = Barang::findOrFail($id);
            $barang->delete();
            $this->updateMasterStatus($barang->id_master);

            return redirect()->route('barang.index')
                ->with('success', 'Barang "' . $barang->nama_barang . '" berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Gagal menghapus barang: ' . $e->getMessage());
        }
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
        ], [
            'nama.unique' => 'Kategori sudah ada dalam sistem.'
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
        ], [
            'nama.unique' => 'Merk sudah ada dalam sistem.'
        ]);

        Merk::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('barang.merk.index')
            ->with('success', 'Merk Telah Ditambahkan');
    }
}
