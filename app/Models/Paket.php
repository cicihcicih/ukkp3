<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = "pakets";
    protected $fillable = [
        'id','outlets_id','jenis','nama_paket','harga'
    ];

    public function outlet()
    {
        return $this->hasOne('App\Outlet','outlets_id');
    }
}
