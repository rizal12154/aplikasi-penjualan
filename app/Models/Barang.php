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

    protected $appends = ['status_barang']; // Tambahkan atribut tambahan

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

    

    public function getStatusBarangAttribute()
    {
        // Jika stok 0, maka "Tidak ada"
        if ($this->stok <= 0) {
            return 'Tidak ada';
        }

        // Jika stok kurang dari stok minimum, maka "Hampir Habis"
        if ($this->stok < $this->stok_minimum) {
            return 'Hampir Habis';
        }

        // Jika stok masih di atas stok minimum, maka "Ada"
        return 'Ada';
    }

    // Tambahkan method untuk memberi warna status
    public function getStatusColorAttribute()
    {
        switch ($this->status_barang) {
            case 'Tidak ada':
                return 'danger';
            case 'Hampir Habis':
                return 'warning';
            case 'Ada':
                return 'success';
            default:
                return 'secondary';
        }
    }
}
