<?php

namespace Database\Seeders;

use App\Models\DetailBeritaModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id_berita' => 1, 'id_kategori' => 1],
            ['id_berita' => 1, 'id_kategori' => 2],
            ['id_berita' => 2, 'id_kategori' => 3],
            ['id_berita' => 2, 'id_kategori' => 4],
            ['id_berita' => 3, 'id_kategori' => 5],
            ['id_berita' => 3, 'id_kategori' => 6],
            ['id_berita' => 4, 'id_kategori' => 7],
            ['id_berita' => 4, 'id_kategori' => 8],
        ];

        foreach ($data as $item) {
            DetailBeritaModel::create($item);
        }
    }
}
