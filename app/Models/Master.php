<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    protected $table = 'master_barang';

    protected $primaryKey = 'id_master';

    protected $fillable = [
        'kode_master',
        'nama_master',
        'deskripsi',
        'id_kategori',
        'id_merk',
        'status'
    ];

    // Tambahkan casting untuk tipe data
    protected $casts = [
        'status' => 'string'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function merk()
    {
        return $this->belongsTo(Merk::class, 'id_merk');
    }

    // Relasi dengan barang
    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_master');
    }
}
