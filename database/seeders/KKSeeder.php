<?php

namespace Database\Seeders;

use App\Models\KkModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kk = [
            [
                'no_kk' => '3522110504040001',
                'nik_kepalakeluarga' => '3522110504040006',
            ],
            [
                'no_kk' => '3522110504040002',
                'nik_kepalakeluarga' => '3522110504040008',
            ],
            [
                'no_kk' => '3522110504040003',
                'nik_kepalakeluarga' => '3522110504040007',
            ],
            [
                'no_kk' => '3522110504040004',
                'nik_kepalakeluarga' => '3522110504040009',
            ],
            [
                'no_kk' => '3522110504040005',
                'nik_kepalakeluarga' => '3522110504040010',
            ],
        ];
        KkModel::insert($kk);
    }
}
