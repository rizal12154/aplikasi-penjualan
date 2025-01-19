<?php

namespace App\Models;

use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\Master;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'detail_transaksi';
    protected $fillable = [
        'id',
        'id_transaksi',
        'id_barang',
        'id_master',
        'kuantitas',
        'subtotal',
    ];

    public function Transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }

    public function Barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    public function Master()
    {
        return $this->belongsTo(Master::class, 'id_master');
    }
}
