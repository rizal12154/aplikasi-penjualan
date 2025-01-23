<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'merk';
    protected $fillable = [
        'id',
        'nama',
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_merk');
    }

    public function masterBarang()
    {
        return $this->hasMany(Master::class, 'id_merk');
    }
}
