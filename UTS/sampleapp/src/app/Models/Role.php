<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Menentukan tabel yang digunakan jika berbeda dengan nama model
    protected $table = 'roles'; // Opsional jika tabelnya berbeda

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'name',
    ];

    // Relasi many-to-many dengan User
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
