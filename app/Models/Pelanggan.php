<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'pelanggan';
    protected $fillable = [
        'nama',
        'alamat',
        'telepon',
        'email',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_pelanggan');
    }
}
