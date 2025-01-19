<?php

namespace App\Models;

use App\Models\Pelanggan;
use App\Models\Kasir;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'transaksi';
    protected $fillable = [
        'id_pelanggan',
        'id_kasir',
        'tanggal',
        'total_pembayaran',
    ];

    public function Pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function Kasir()
    {
        return $this->belongsTo(Kasir::class, 'id_kasir');
    }
}
