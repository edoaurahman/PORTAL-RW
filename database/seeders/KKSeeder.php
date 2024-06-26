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
            
            // abid
            ['no_kk' => '3522110504040006', 'nik_kepalakeluarga' => '3522110504040006'],
            ['no_kk' => '3522110504040007', 'nik_kepalakeluarga' => '3522110504040010'],
            ['no_kk' => '3522110504040008', 'nik_kepalakeluarga' => '3522110504040014'],
            ['no_kk' => '3522110504040009', 'nik_kepalakeluarga' => '3522110504040018'],
            // putra
            ['no_kk' => '3522110504040010', 'nik_kepalakeluarga' => '3522110504040022'],
            ['no_kk' => '3522110504040011', 'nik_kepalakeluarga' => '3522110504040026'],
            ['no_kk' => '3522110504040012', 'nik_kepalakeluarga' => '3522110504040030'],
            ['no_kk' => '3522110504040013', 'nik_kepalakeluarga' => '3522110504040034'],
            // anang
            ['no_kk' => '3522110504040014', 'nik_kepalakeluarga' => '3522110504040038'],
            ['no_kk' => '3522110504040015', 'nik_kepalakeluarga' => '3522110504040042'],
            ['no_kk' => '3522110504040016', 'nik_kepalakeluarga' => '3522110504040046'],
            ['no_kk' => '3522110504040017', 'nik_kepalakeluarga' => '3522110504040050'],
            // zaki
            ['no_kk' => '3522110504040018', 'nik_kepalakeluarga' => '3522110504040054'],
            ['no_kk' => '3522110504040019', 'nik_kepalakeluarga' => '3522110504040058'],
            ['no_kk' => '3522110504040020', 'nik_kepalakeluarga' => '3522110504040063'],
            ['no_kk' => '3522110504040021', 'nik_kepalakeluarga' => '3522110504040067'], 
            // edo
            ['no_kk' => '3522110504040022', 'nik_kepalakeluarga' => '3522110504040070'],
            ['no_kk' => '3522110504040023', 'nik_kepalakeluarga' => '3522110504040074'],
            ['no_kk' => '3522110504040024', 'nik_kepalakeluarga' => '3522110504040078'],
            ['no_kk' => '3522110504040025', 'nik_kepalakeluarga' => '3522110504040082'],
            // siapa saja (done)
            ['no_kk' => '3522110504040026', 'nik_kepalakeluarga' => '3522110504040086'],
            ['no_kk' => '3522110504040027', 'nik_kepalakeluarga' => '3522110504040090'],
            ['no_kk' => '3522110504040028', 'nik_kepalakeluarga' => '3522110504040094'],
            ['no_kk' => '3522110504040029', 'nik_kepalakeluarga' => '3522110504040098'],
            // siapa saja (done)
            ['no_kk' => '3522110504040030', 'nik_kepalakeluarga' => '3522110504040102'],
            ['no_kk' => '3522110504040031', 'nik_kepalakeluarga' => '3522110504040106'],
            ['no_kk' => '3522110504040032', 'nik_kepalakeluarga' => '3522110504040110'],
            ['no_kk' => '3522110504040033', 'nik_kepalakeluarga' => '3522110504040114'],
        ];
        KkModel::insert($kk);
    }
}
