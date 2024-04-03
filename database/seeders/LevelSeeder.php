<?php

namespace Database\Seeders;

use App\Models\LevelModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $level = [
            [
                'id_level' => 1,
                'nama_level' => 'Super Admin'
            ],
            [
                'id_level' => 2,
                'nama_level' => 'RT 01'
            ],
            [
                'id_level' => 3,
                'nama_level' => 'Penduduk'
            ],
            [
                'id_level' => 4,
                'nama_level' => 'RW'
            ],
        ];
        LevelModel::insert($level);
    }
}
