<?php

namespace Database\Seeders;

use App\Models\InventarisModel;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class InventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventaris = [
            ['nama' => 'Ember','image'=> 'nama.jpg' , 'jumlah' => 7],
            ['nama' => 'Sabun Tangan','image'=> 'nama.jpg' , 'jumlah' => 8],
            ['nama' => 'Sikat Toilet','image'=> 'nama.jpg' , 'jumlah' => 4],
            ['nama' => 'Pengki','image'=> 'nama.jpg' , 'jumlah' => 6],
            ['nama' => 'Lap Kain','image'=> 'nama.jpg' , 'jumlah' => 20],
            ['nama' => 'Pengharum Ruangan','image'=> 'nama.jpg' , 'jumlah' => 2],
            ['nama' => 'Kantong Sampah','image'=> 'nama.jpg' , 'jumlah' => 15],
            ['nama' => 'Masker','image'=> 'nama.jpg' , 'jumlah' => 50],
            ['nama' => 'Hand Sanitizer','image'=> 'nama.jpg' , 'jumlah' => 5],
            ['nama' => 'Cangkul','image'=> 'nama.jpg' , 'jumlah' => 2],
            ['nama' => 'Gembor','image'=> 'nama.jpg' , 'jumlah' => 3],
            ['nama' => 'Parang','image'=> 'nama.jpg' , 'jumlah' => 4]
        ];

        InventarisModel::insert($inventaris);
    }
}
