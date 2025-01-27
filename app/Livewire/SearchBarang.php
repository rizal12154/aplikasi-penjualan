<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBarang extends Component
{
    public $query = '';
    public $barangList = [];
    public $selectedBarang;

    public function updatedQuery()
    {
        if (strlen($this->query) > 1) { // Hindari query jika terlalu pendek
            $this->barangList = \App\Models\Barang::where('nama_barang', 'like', "%{$this->query}%")
                ->orWhere('kode_barang', 'like', "%{$this->query}%")
                ->limit(10) // Batasi hasil
                ->get()
                ->toArray(); // Ubah menjadi array agar kompatibel dengan blade
        } else {
            $this->barangList = [];
        }
    }

    public function selectBarang($id, $kode, $nama, $harga)
    {
        $this->selectedBarang = [
            'id' => $id,
            'kode_barang' => $kode,
            'nama_barang' => $nama,
            'harga_jual' => $harga,
        ];
        $this->query = "{$kode} - {$nama}";
        $this->barangList = [];
    }

    public function render()
    {
        return view('livewire.search-barang');
    }
}
