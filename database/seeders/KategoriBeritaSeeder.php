<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_kategori' => 'Pendidikan'],
            ['nama_kategori' => 'Kesehatan'],
            ['nama_kategori' => 'Pariwisata'],
            ['nama_kategori' => 'Olahraga'],
            ['nama_kategori' => 'Sosial'],
            ['nama_kategori' => 'Budaya'],
            ['nama_kategori' => 'Ekonomi'],
            ['nama_kategori' => 'Politik'],
            ['nama_kategori' => 'Hukum'],
            ['nama_kategori' => 'Teknologi'],
        ];

        foreach ($data as $item) {

        }
    }
}
