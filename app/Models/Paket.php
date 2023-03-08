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
        return $this->hasOne('App\Models\Outlet','id','outlets_id');
    }
    public function detailtransaksi()
    {
        return $this->belongsTo('App\Models\DetailTransaksi','transaksi');
    }
    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi','transaksi');
    }
}
