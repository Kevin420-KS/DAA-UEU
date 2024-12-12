<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi plural Laravel
    protected $table = 'products';

    // Tentukan kolom-kolom yang bisa diisi
    protected $fillable = ['name', 'price', 'category'];

    // (Opsional) Tentukan nilai default untuk kategori jika diperlukan
    protected $attributes = [
        'category' => 'Baju', // Default kategori
    ];
}
