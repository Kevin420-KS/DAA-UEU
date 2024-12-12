<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembelis';  // Nama tabel di database
    protected $fillable = [
        'ID_Pembeli', 'Nama', 'Alamat', 'Telepon'
    ];

    public $timestamps = false;
}
