<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Transaksi;

class LaporanPenjualan extends Component
{
    use WithPagination;

    public $startDate;
    public $endDate;

    public function render()
    {
        $transaksi = Transaksi::with(['pelanggan', 'detailTransaksi.barang'])
            ->when($this->startDate, function ($query) {
                return $query->where('tanggal', '>=', $this->startDate);
            })
            ->when($this->endDate, function ($query) {
                return $query->where('tanggal', '<=', $this->endDate);
            })
            ->orderBy('tanggal', 'desc')
            ->paginate(10);

        return view('livewire.laporan-penjualan', compact('transaksi'));
    }
}
