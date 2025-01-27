<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Transaksi;

class HistoryPenjualan extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $transaksi = Transaksi::with(['pelanggan', 'detailTransaksi.barang'])
            ->when($this->search, function ($query) {
                return $query->whereHas('pelanggan', function ($q) {
                    $q->where('nama', 'like', '%' . $this->search . '%');
                });
            })
            ->orderBy('tanggal', 'desc')
            ->paginate(10);

        return view('livewire.history-penjualan', compact('transaksi'));
    }
}
