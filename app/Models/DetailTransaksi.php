<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DtailTransaksi extends Model
{
    use HasFactory;

    protected $table = "detail_transaksis";
    protected $fillable = [
        'id', 'transaksi_id', 'paket_id', 'qty'
    ];
}
