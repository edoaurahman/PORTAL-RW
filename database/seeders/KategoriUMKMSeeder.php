<?php

namespace Database\Seeders;

use App\Models\KategoriUMKMModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriUMKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriUMKM = [
            ['id_kategori' => 1, 'nama_kategori' => 'Kuliner'],
            ['id_kategori' => 2, 'nama_kategori' => 'Fashion'],
            ['id_kategori' => 3, 'nama_kategori' => 'Teknologi'],
            ['id_kategori' => 4, 'nama_kategori' => 'Kesehatan'],
            ['id_kategori' => 5, 'nama_kategori' => 'Pendidikan'],
            ['id_kategori' => 6, 'nama_kategori' => 'Pertanian'],
            ['id_kategori' => 7, 'nama_kategori' => 'Jasa'],
            ['id_kategori' => 8, 'nama_kategori' => 'Kerajinan'],
            ['id_kategori' => 9, 'nama_kategori' => 'Pariwisata'],
            ['id_kategori' => 10, 'nama_kategori' => 'Transportasi']
        ];

        KategoriUMKMModel::insert($kategoriUMKM);
    }
}
