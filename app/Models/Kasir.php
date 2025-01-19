<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'kasir';
    protected $fillable = [
        'nama',
        'username',
        'password'
    ];
}
