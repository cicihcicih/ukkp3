<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $table  = "outlets";
    protected $fillable =  [
        'id', 'nama', 'alamat', 'tlp'
    ];
    public function paket()
    {
        return $this->belongsTo('App\Models\Paket','paket');
    }
    public function detailtransaksi()
    {
        return $this->belongsTo('App\Models\DetailTransaksi','detailtransaksi');
    }
    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi','transaksi');
    }
}
