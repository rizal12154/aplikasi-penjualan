<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransaksiExport;

class LaporanTransaksi extends Component
{
    public $startDate;
    public $endDate;
    public $tipeFile = 'pdf';

    protected $rules = [
        'startDate' => 'required|date',
        'endDate' => 'required|date|after_or_equal:startDate',
        'tipeFile' => 'in:pdf,excel,csv'
    ];

    public function render()
    {
        return view('livewire.laporan-transaksi');
    }

    public function downloadLaporan()
    {
        $this->validate();

        $transaksis = Transaksi::whereBetween('created_at', [$this->startDate, $this->endDate])
            ->with('details.barang')
            ->get();

        switch ($this->tipeFile) {
            case 'pdf':
                return $this->exportPDF($transaksis);
            case 'excel':
                return Excel::download(new TransaksiExport($transaksis), 'laporan_transaksi.xlsx');
            case 'csv':
                return Excel::download(new TransaksiExport($transaksis), 'laporan_transaksi.csv');
        }
    }

    private function exportPDF($transaksis)
    {
        $pdf = PDF::loadView('pdf.laporan_transaksi', [
            'transaksis' => $transaksis,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate
        ]);

        return $pdf->download('laporan_transaksi.pdf');
    }
}
