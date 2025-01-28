<?php

namespace App\Livewire;

use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\DetailTransaksi;
use Livewire\Component;

class Transaksis extends Component
{
    public $items = []; // Data transaksi
    public $total = 0;
    public $pelangganList = [];
    public $pelanggan = 0;
    public $bayar = 0;
    public $kembali = 0;
    public $catatan = '';
    public $transaksi;
    public $pelangganInfo = [
        'telp' => '',
        'alamat' => '',
        'info_lain' => ''
    ];

    public function mount()
    {
        $this->addItem();
        $this->ambilDataPelanggan();
    }

    public function ambilDataPelanggan()
    {
        $this->pelangganList = Pelanggan::all();
    }

    public function updatedPelanggan($value)
    {
        if ($value > 0) {
            $pelanggan = Pelanggan::find($value);
            if ($pelanggan) {
                $this->pelangganInfo = [
                    'telp' => $pelanggan->kontak ?? '',  // sesuaikan dengan nama field di database
                    'alamat' => $pelanggan->alamat ?? '',
                    'info_lain' => $pelanggan->info_lain ?? '' // jika ada field info_lain
                ];
            }
        } else {
            // Reset info pelanggan jika memilih option default
            $this->pelangganInfo = [
                'telp' => '',
                'alamat' => '',
                'info_lain' => ''
            ];
        }
    }

    public function addItem()
    {
        $this->items[] = [
            'kode_barang' => '',
            'nama_barang' => '',
            'harga' => 0,
            'qty' => 1,
            'subtotal' => 0,
            'barang_id' => null,
        ];
    }

    public function removeItem($index)
    {
        unset($this->items[$index]);
        $this->items = array_values($this->items);
        $this->calculateTotal();
    }

    public function calculateTotal()
    {
        $this->total = array_sum(array_column($this->items, 'subtotal'));
        $this->kembali = max($this->bayar - $this->total, 0);
    }

    public function updateItem($index, $field, $value)
    {
        $this->items[$index][$field] = $value;

        if ($field === 'kode_barang') {
            $barang = Barang::where('kode_barang', $value)->first();
            if ($barang) {
                $this->items[$index]['barang_id'] = $barang->id; // Tambahkan barang_id ke array
                $this->items[$index]['nama_barang'] = $barang->nama_barang;
                $this->items[$index]['harga'] = $barang->harga_jual; // Gunakan harga_jual dari database
                $this->items[$index]['subtotal'] = $barang->harga_jual * $this->items[$index]['qty'];
            } else {
                $this->items[$index]['barang_id'] = null; // Set barang_id ke null jika barang tidak ditemukan
                $this->items[$index]['nama_barang'] = '';
                $this->items[$index]['harga'] = 0;
                $this->items[$index]['subtotal'] = 0;
            }
        }

        if ($field === 'harga' || $field === 'qty') {
            $this->items[$index]['subtotal'] = floatval($this->items[$index]['harga']) * intval($this->items[$index]['qty']);
        }

        $this->calculateTotal();
    }

    public function updatedBayar()
    {
        $this->calculateTotal();
    }

    public function saveTransaction()
    {
        // Validasi data
        $this->validate([
            'pelanggan' => 'required|exists:pelanggan,id',
            'items' => 'required|array|min:1',
            'bayar' => 'required|numeric|min:' . $this->total,
        ]);

        // Simpan transaksi ke database
        $transaksi = Transaksi::create([
            'pelanggan_id' => $this->pelanggan,
            'id_kasir' => auth()->id(),
            'total_pembayaran' => $this->total,
            'total_harga' => $this->total,
            'bayar' => $this->bayar,
            'kembali' => $this->kembali,
            'catatan' => $this->catatan,
            'tanggal' => now(),
        ]);

        // Simpan detail transaksi
        foreach ($this->items as $item) {
            DetailTransaksi::create([
                'id_transaksi' => $transaksi->id, // Pastikan nama kolom sesuai database
                'barang_id' => $item['barang_id'],
                'kuantitas' => $item['qty'],
                'harga' => $item['harga'],
                'subtotal' => $item['subtotal'],
            ]);

            // Update stok barang
            $barang = Barang::find($item['barang_id']);
            if ($barang) {
                $barang->stok -= $item['qty'];
                $barang->save();
            }
        }

        // Reset form
        $this->reset(['items', 'total', 'bayar', 'kembali', 'catatan', 'pelanggan']);
        session()->flash('message', 'Transaksi berhasil disimpan!');
    }

    public function render()
    {
        return view('livewire.transaksis');
    }
}
