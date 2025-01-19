<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\Merk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'barang';
    protected $fillable = [
        'id',
        'kode_barang',
        'nama_barang',
        'id_merk',
        'id_kategori',
        'harga_beli',
        'harga_jual',
        'stok',
    ];

    public function Merk()
    {
        return $this->belongsTo(Merk::class, 'id_merk');
    }

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
