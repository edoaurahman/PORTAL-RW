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
                'email' => 'anang@gmail.com',
                'username' => '3522110504040007',
                'password' => Hash::make('anang123'),
                'id_level' => '4',
                'nik' => '3522110504040007'
            ]
        ];

        AkunModel::insert($akun);
    }
}
