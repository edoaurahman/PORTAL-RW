<?php

namespace Database\Seeders;

use App\Models\KategoriKeuanganModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriKeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'nama_kategori' => 'Pemasukan',
                'keterangan' => 'Iuran Bulanan'
            ]
        ];

        foreach ($kategori as $k) {
            KategoriKeuanganModel::create($k);
        }
    }
}
