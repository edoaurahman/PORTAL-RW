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
                'nik_kepalakeluarga' => '3522110504040001',
            ],
            [
                'no_kk' => '3522110504040002',
                'nik_kepalakeluarga' => '3522110504040002',
            ],
            [
                'no_kk' => '3522110504040003',
                'nik_kepalakeluarga' => '3522110504040003',
            ],
            [
                'no_kk' => '3522110504040004',
                'nik_kepalakeluarga' => '3522110504040004',
            ],
            [
                'no_kk' => '3522110504040005',
                'nik_kepalakeluarga' => '3522110504040005',
            ],
            // abid
            ['no_kk' => '3522110504040006', 'nik_kepalakeluarga' => '3522110504040011'],
            ['no_kk' => '3522110504040007', 'nik_kepalakeluarga' => '3522110504040012'],
            ['no_kk' => '3522110504040008', 'nik_kepalakeluarga' => '3522110504040013'],
            ['no_kk' => '3522110504040009', 'nik_kepalakeluarga' => '3522110504040014'],
            // putra
            ['no_kk' => '3522110504040010', 'nik_kepalakeluarga' => '3522110504040022'],
            ['no_kk' => '3522110504040011', 'nik_kepalakeluarga' => '3522110504040026'],
            ['no_kk' => '3522110504040012', 'nik_kepalakeluarga' => '3522110504040030'],
            ['no_kk' => '3522110504040013', 'nik_kepalakeluarga' => '3522110504040034'],
            // anang
            ['no_kk' => '3522110504040014', 'nik_kepalakeluarga' => '3522110504040019'],
            ['no_kk' => '3522110504040015', 'nik_kepalakeluarga' => '3522110504040020'],
            ['no_kk' => '3522110504040016', 'nik_kepalakeluarga' => '3522110504040021'],
            ['no_kk' => '3522110504040017', 'nik_kepalakeluarga' => '3522110504040022'],
            // zaki
            ['no_kk' => '3522110504040018', 'nik_kepalakeluarga' => '3522110504040023'],
            ['no_kk' => '3522110504040019', 'nik_kepalakeluarga' => '3522110504040024'],
            ['no_kk' => '3522110504040020', 'nik_kepalakeluarga' => '3522110504040025'],
            ['no_kk' => '3522110504040021', 'nik_kepalakeluarga' => '3522110504040026'],
            // edo
            ['no_kk' => '3522110504040022', 'nik_kepalakeluarga' => '3522110504040027'],
            ['no_kk' => '3522110504040023', 'nik_kepalakeluarga' => '3522110504040028'],
            ['no_kk' => '3522110504040024', 'nik_kepalakeluarga' => '3522110504040028'],
            ['no_kk' => '3522110504040025', 'nik_kepalakeluarga' => '3522110504040028'],
            // siapa saja
            ['no_kk' => '3522110504040026', 'nik_kepalakeluarga' => '3522110504040028'],
            ['no_kk' => '3522110504040027', 'nik_kepalakeluarga' => '3522110504040028'],
            ['no_kk' => '3522110504040028', 'nik_kepalakeluarga' => '3522110504040028'],
            ['no_kk' => '3522110504040029', 'nik_kepalakeluarga' => '3522110504040028'],
            // siapa saja
            ['no_kk' => '3522110504040030', 'nik_kepalakeluarga' => '3522110504040028'],
            ['no_kk' => '3522110504040031', 'nik_kepalakeluarga' => '3522110504040028'],
            ['no_kk' => '3522110504040032', 'nik_kepalakeluarga' => '3522110504040028'],
            ['no_kk' => '3522110504040033', 'nik_kepalakeluarga' => '3522110504040028'],
        ];
        KkModel::insert($kk);
    }
}
