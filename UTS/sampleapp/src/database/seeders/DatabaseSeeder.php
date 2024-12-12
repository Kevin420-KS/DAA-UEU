<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->seedUsers();
        $this->call([
            KendaraanSeeder::class,
            PembeliSeeder::class,
            SalesSeeder::class,
            TransaksiSeeder::class,
        ]);
    }

    private function seedUsers(): void
    {
        if (! User::where('email', 'admin@admin.com')->exists()) {
            $users = User::factory()->createMany([
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Pembeli',
                    'email' => 'pembeli@pembeli.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Sales',
                    'email' => 'sales@sales.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Kendaraan',
                    'email' => 'kendaraan@kendaraan.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Transaksi',
                    'email' => 'transaksi@transaksi.com',
                    'password' => bcrypt('password'),
                ],
            ]);

            foreach ($users as $user) {
                if ($user->email == 'admin@admin.com') {
                    $user->assignRole('super_admin');
                } elseif ($user->email == 'pembeli@pembeli.com') {
                    $user->assignRole('Pembeli');
                } elseif ($user->email == 'sales@sales.com') {
                    $user->assignRole('Sales');
                } elseif ($user->email == 'kendaraan@kendaraan.com') {
                    $user->assignRole('Kendaraan');
                } elseif ($user->email == 'transaksi@transaksi.com') {
                    $user->assignRole('Transaksi');
                }
            }
        }
    }
}
