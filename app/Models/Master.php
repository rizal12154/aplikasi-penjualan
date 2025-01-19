<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\Merk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    protected $table = 'master_barang';
    protected $fillable = [
        'id_master',
        'nama_barang',
        'stok',
        'harga_beli',
        'harga_jual',
        'id_kategori',
        'id_merk',
        'satuan'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function merk()
    {
        return $this->belongsTo(Merk::class, 'id_merk');
    }
}
