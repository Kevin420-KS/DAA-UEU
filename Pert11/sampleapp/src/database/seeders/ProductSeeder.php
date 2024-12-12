<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Adidas',
                'price' => 1000,
                'category' => 'Sepatu',
            ],
            [
                'name' => 'Nike',
                'price' => 999,
                'category' => 'Sepatu',
            ],
            [
                'name' => 'Levis',
                'price' => 500,
                'category' => 'Baju',
            ],
            [
                'name' => 'Uniqlo',
                'price' => 100,
                'category' => 'Baju',
            ],
        ]);
    }
}
