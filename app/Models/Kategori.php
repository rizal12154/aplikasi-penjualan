<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'kategori';
    protected $fillable = [
        'id',
        'nama',
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_kategori');
    }

    public function masterBarang()
    {
        return $this->hasMany(Master::class, 'id_kategori');
    }
}
