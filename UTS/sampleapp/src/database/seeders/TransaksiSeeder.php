<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        DB::table('transaksis')->insert([
            'ID_Pembeli' => 1,
            'ID_Sales' => 1,
            'ID_Kendaraan' => 1,
            'Tanggal' => Carbon::now(),
            'Total_Harga' => 100000000
        ]);
    }
}
