<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraans';  // Nama tabel di database
    protected $fillable = [
        'ID_Kendaraan', 'Nama', 'Jenis', 'Harga', 'Stock'
    ];

    public $timestamps = false;
}
