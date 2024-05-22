<?php

namespace Database\Seeders;

use App\Models\InventarisModel;
use Illuminate\Database\Seeder;

class InventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventaris = [
            ['nama' => 'Ember', 'jumlah' => 7],
            ['nama' => 'Sabun Tangan', 'jumlah' => 8],
            ['nama' => 'Sikat Toilet', 'jumlah' => 4],
            ['nama' => 'Pengki', 'jumlah' => 6],
            ['nama' => 'Lap Kain', 'jumlah' => 20],
            ['nama' => 'Pengharum Ruangan', 'jumlah' => 2],
            ['nama' => 'Kantong Sampah', 'jumlah' => 15],
            ['nama' => 'Masker', 'jumlah' => 50],
            ['nama' => 'Hand Sanitizer', 'jumlah' => 5],
            ['nama' => 'Cangkul', 'jumlah' => 2],
            ['nama' => 'Gembor', 'jumlah' => 3],
            ['nama' => 'Parang', 'jumlah' => 4]
        ];

        InventarisModel::insert($inventaris);
    }
}
