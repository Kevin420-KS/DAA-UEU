<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';  // Nama tabel di database
    protected $fillable = [
        'ID_Sales', 'Nama', 'Email', 'Telepon'
    ];

    public $timestamps = false;
}
