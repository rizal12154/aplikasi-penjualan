<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $table = 'kasir';

    protected $fillable = [
        'id_user',
        'nama',
        'username',
        'email',
        'password',
        'status'
    ];

    // Sembunyikan password
    protected $hidden = ['password'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_kasir');
    }

    public function User() 
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
