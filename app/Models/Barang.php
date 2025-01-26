<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'id_merk',
        'id_kategori',
        'harga_beli',
        'harga_jual',
        'stok',
        'stok_minimum',
        'stok_maksimum',
        'status'
    ];

    // Tambahkan casting untuk kolom numerik
    protected $casts = [
        'harga_beli' => 'decimal:2',
        'harga_jual' => 'decimal:2',
        'stok' => 'integer',
        'stok_minimum' => 'integer',
        'stok_maksimum' => 'integer'
    ];

    public function merk()
    {
        return $this->belongsTo(Merk::class, 'id_merk');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'id_barang');
    }
}
