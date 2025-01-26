<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBarang extends Component
{
    public function render()
    {
        return view('livewire.search-barang');
    }

    public $query = '';
    public $barangList = [];

    public function updatedQuery()
    {
        $this->barangList = \App\Models\Barang::where('nama_barang', 'like', "%{$this->query}%")
            ->orWhere('kode_barang', 'like', "%{$this->query}%")
            ->get(); // Hasilkan instance Collection, bukan array
    }

    public function selectBarang($id, $kode, $nama, $harga)
    {
        // Contoh: tangani pemilihan barang
        $this->query = "{$kode} - {$nama}";
        $this->barangList = [];
    }
}
