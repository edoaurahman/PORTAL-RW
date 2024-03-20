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
                'username' => 'superadmin',
                'password' => Hash::make('superadmin'),
                'id_level' => '1',
                'nik' => '3522110504040006'
            ]
        ];

        AkunModel::insert($akun);
    }
}
