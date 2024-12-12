<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kendaraan;

class KendaraanSeeder extends Seeder
{
    public function run()
    {
        // Memastikan data kendaraan ditambahkan ke database
        Kendaraan::create([
            'Nama' => 'Toyota Avanza',
            'Jenis' => 'MPV',
            'Harga' => 200000000,
            'Stock' => 10
        ]);

        Kendaraan::create([
            'Nama' => 'Honda CR-V',
            'Jenis' => 'SUV',
            'Harga' => 350000000,
            'Stock' => 5
        ]);

        Kendaraan::create([
            'Nama' => 'Suzuki Swift',
            'Jenis' => 'Hatchback',
            'Harga' => 250000000,
            'Stock' => 7
        ]);
    }
}
