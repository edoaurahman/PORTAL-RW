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
            ['nama' => 'Ember', 'jumlah' => 7, 'status' => 'Tersedia'],
            ['nama' => 'Sabun Tangan', 'jumlah' => 8, 'status' => 'Tersedia'],
            ['nama' => 'Sikat Toilet', 'jumlah' => 4, 'status' => 'Tersedia'],
            ['nama' => 'Pengki', 'jumlah' => 6, 'status' => 'Tersedia'],
            ['nama' => 'Lap Kain', 'jumlah' => 20, 'status' => 'Tersedia'],
            ['nama' => 'Pengharum Ruangan', 'jumlah' => 2, 'status' => 'Tersedia'],
            ['nama' => 'Kantong Sampah', 'jumlah' => 15, 'status' => 'Tersedia'],
            ['nama' => 'Masker', 'jumlah' => 50, 'status' => 'Tersedia'],
            ['nama' => 'Hand Sanitizer', 'jumlah' => 5, 'status' => 'Tersedia'],
            ['nama' => 'Cangkul', 'jumlah' => 2, 'status' => 'Tersedia'],
            ['nama' => 'Gembor', 'jumlah' => 3, 'status' => 'Tersedia'],
            ['nama' => 'Parang', 'jumlah' => 4, 'status' => 'Tersedia']
        ];

        InventarisModel::insert($inventaris);
    }
}
