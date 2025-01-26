<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transaksi;

class NotaTransaksi extends Component
{
    public $transaksi;

    public function mount($id)
    {
        // Ambil data transaksi berdasarkan ID
        $this->transaksi = Transaksi::with('details.barang')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.nota-transaksi', [
            'transaksi' => $this->transaksi,
        ]);
    }
}
