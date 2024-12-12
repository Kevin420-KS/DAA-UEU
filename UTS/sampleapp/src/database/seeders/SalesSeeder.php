<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sales;

class SalesSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data sales
        Sales::create([
            'Nama' => 'Sales 1',
            'Email' => 'sales1@example.com',
            'Telepon' => '08987654321'
        ]);

        Sales::create([
            'Nama' => 'Sales 2',
            'Email' => 'sales2@example.com',
            'Telepon' => '08987654322'
        ]);
    }
}
