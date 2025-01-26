<?php

namespace App\Livewire;

use App\Models\Barang;
use App\Models\Transaksi;
use Livewire\Component;

class Transaksis extends Component
{
    public $items = []; // Data transaksi
    public $total = 0;
    public $pelanggan = 0;
    public $bayar = 0;
    public $kembali = 0;
    public $catatan = '';
    public $transaksi;

    public function mount()
    {
        $this->addItem(); // Tambahkan baris awal
    }

    public function addItem()
    {
        $this->items[] = [
            'kode_barang' => '',
            'nama_barang' => '',
            'harga' => 0,
            'qty' => 1,
            'subtotal' => 0,
        ];
    }

    public function removeItem($index)
    {
        unset($this->items[$index]);
        $this->items = array_values($this->items); // Reset index array
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
                $this->items[$index]['nama_barang'] = $barang->nama_barang;
                $this->items[$index]['harga'] = $barang->harga;
            } else {
                $this->items[$index]['nama_barang'] = '';
                $this->items[$index]['harga'] = 0;
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

    // Fungsi untuk menyimpan transaksi dan menampilkan nota
    public function saveTransaction()
    {
        $this->transaksi = Transaksi::create([
            'total_harga' => $this->total,
            'pelanggan_id' => $this->pelanggan,
            'catatan' => $this->catatan,
        ]);

        // Menambahkan detail transaksi berdasarkan items
        foreach ($this->items as $item) {
            $this->transaksi->details()->create([
                'barang_id' => $item['barang_id'], // Sesuaikan dengan relasi
                'kuantitas' => $item['qty'],
                'subtotal' => $item['subtotal'],
            ]);
        }

        // Simpan transaksi dan tampilkan nota
        session()->flash('message', 'Transaksi berhasil disimpan!');
    }

    public function render()
    {
        return view('livewire.transaksis');
    }
}
