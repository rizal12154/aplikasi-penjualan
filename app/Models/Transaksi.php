<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'id_pelanggan',
        'id_kasir',
        'tanggal',
        'total_pembayaran',
        'metode_pembayaran',
        'catatan'
    ];

    // Tambahkan casting
    protected $casts = [
        'tanggal' => 'datetime',
        'total_pembayaran' => 'decimal:2'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function kasir()
    {
        return $this->belongsTo(Kasir::class, 'id_kasir');
    }

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'id_transaksi');
    }
}
