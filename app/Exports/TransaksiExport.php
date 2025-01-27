<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransaksiExport implements FromCollection, WithHeadings
{
    protected $transaksis;

    public function __construct($transaksis)
    {
        $this->transaksis = $transaksis;
    }

    public function collection()
    {
        return $this->transaksis->map(function ($transaksi) {
            return [
                'ID' => $transaksi->id,
                'Tanggal' => $transaksi->created_at,
                'Total Harga' => $transaksi->total_harga,
                'Status' => $transaksi->status
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID Transaksi',
            'Tanggal',
            'Total Harga',
            'Status'
        ];
    }
}
