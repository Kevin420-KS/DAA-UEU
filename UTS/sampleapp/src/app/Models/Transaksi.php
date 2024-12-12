<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';  // Nama tabel di database
    protected $fillable = [
        'ID_Transaksi', 'ID_Pembeli', 'ID_Sales', 'ID_Kendaraan', 'Tanggal', 'Total_Harga'
    ];

    public $timestamps = false;
}
