<?php

namespace Database\Seeders;

use App\Models\AkunModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $akun = [
            [
                'email' => 'edoaurahman@gmail.com',
                'username' => 'superadmin',
                'password' => Hash::make('superadmin'),
                'id_level' => '1',
                'nik' => '3522110504040006'
            ],
            [
                'email' => 'anangg@gmail.com',
                'username' => 'user',
                'password' => Hash::make('user'),
                'id_level' => '3',
                'nik' => '3522110504040007'
            ],
            [
                'email' => 'rt@gmail.com',
                'username' => 'rt01',
                'password' => Hash::make('rt01'),
                'id_level' => '2',
                'nik' => '3522110504040008'
            ],
            [
                'email' => 'rw@gmail.com',
                'username' => 'rw',
                'password' => Hash::make('rw'),
                'id_level' => '4',
                'nik' => '3522110504040006'
            ],
        ];

        AkunModel::insert($akun);
    }
}
