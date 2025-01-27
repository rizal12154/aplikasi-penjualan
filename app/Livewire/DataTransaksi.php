<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Transaksi;

class DataTransaksi extends Component
{
    use WithPagination;

    public $search = '';
    public $status = '';

    public function render()
    {
        $transaksi = Transaksi::with(['pelanggan', 'kasir'])
            ->when($this->search, function ($query) {
                return $query->whereHas('pelanggan', function ($q) {
                    $q->where('nama', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->status, function ($query) {
                return $query->where('status', $this->status);
            })
            ->orderBy('tanggal', 'desc')
            ->paginate(10);

        return view('livewire.data-transaksi', compact('transaksi'));
    }
}
