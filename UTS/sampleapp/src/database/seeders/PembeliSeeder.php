<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pembeli;

class PembeliSeeder extends Seeder
{
    public function run()
    {
        // Memasukkan data pembeli
        Pembeli::create([
            'Nama' => 'John Doe',
            'Alamat' => 'Jl. Kebon Jeruk No. 21',
            'Telepon' => '08123456789'
        ]);

        Pembeli::create([
            'Nama' => 'Jane Smith',
            'Alamat' => 'Jl. Melati No. 15',
            'Telepon' => '08234567890'
        ]);
    }
}
