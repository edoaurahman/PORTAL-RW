<?php

namespace Database\Seeders;

use App\Models\AlamatModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlamatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alamat = [
                [
                    'id_alamat' => '1',
                    'rw' => '1',
                    'rt' => '1',
                    'kel' => 'Prigi',
                    'kecamatan' => 'Kanor',
                    'jalan' => 'Jl. Raya Prigi'
                ],
                [
                    'id_alamat' => '2',
                    'rw' => '1',
                    'rt' => '2',
                    'kel' => 'Prigi',
                    'kecamatan' => 'Kanor',
                    'jalan' => 'Jl. Raya Prigi'
                ],
                [
                    'id_alamat' => '3',
                    'rw' => '1',
                    'rt' => '3',
                    'kel' => 'Prigi',
                    'kecamatan' => 'Kanor',
                    'jalan' => 'Jl. Raya Prigi'
                ],
                [
                    'id_alamat' => '4',
                    'rw' => '1',
                    'rt' => '4',
                    'kel' => 'Prigi',
                    'kecamatan' => 'Kanor',
                    'jalan' => 'Jl. Raya Prigi'
                ],
                [
                    'id_alamat' => '5',
                    'rw' => '1',
                    'rt' => '5',
                    'kel' => 'Prigi',
                    'kecamatan' => 'Kanor',
                    'jalan' => 'Jl. Raya Prigi'
                ],
                [
                    'id_alamat' => '6',
                    'rw' => '1',
                    'rt' => '3',
                    'kel' => 'Siman',
                    'kecamatan' => 'Ponorogo',
                    'jalan' => 'Jl. Raya Siman'
                ],
                ['id_alamat' => '7', 'rw' => 1, 'rt' => 1, 'kel' => 'Arjosari', 'kecamatan' => 'Blimbing', 'jalan' => 'Jl. Mawar'],
                ['id_alamat' => '8', 'rw' => 1, 'rt' => 2, 'kel' => 'Arjosari', 'kecamatan' => 'Blimbing', 'jalan' => 'Jl. Melati'],
                ['id_alamat' => '9', 'rw' => 1, 'rt' => 3, 'kel' => 'Arjosari', 'kecamatan' => 'Blimbing', 'jalan' => 'Jl. Kenanga'],
                ['id_alamat' => '10','rw' => 1, 'rt' => 4, 'kel' => 'Arjosari', 'kecamatan' => 'Blimbing', 'jalan' => 'Jl. Anggrek'],
                ['id_alamat' => '11','rw' => 1, 'rt' => 5, 'kel' => 'Arjosari', 'kecamatan' => 'Blimbing', 'jalan' => 'Jl. Tulip'],
                ['id_alamat' => '12','rw' => 1, 'rt' => 6, 'kel' => 'Arjosari', 'kecamatan' => 'Blimbing', 'jalan' => 'Jl. Dahlia'],
                ['id_alamat' => '13','rw' => 1, 'rt' => 7, 'kel' => 'Arjosari', 'kecamatan' => 'Blimbing', 'jalan' => 'Jl. Mawar Merah'],
                ['id_alamat' => '14','rw' => 1, 'rt' => 1, 'kel' => 'Arjosari', 'kecamatan' => 'Blimbing', 'jalan' => 'Jl. Melati Putih'],
                ['id_alamat' => '15','rw' => 1, 'rt' => 2, 'kel' => 'Arjosari', 'kecamatan' => 'Blimbing', 'jalan' => 'Jl. Kenanga Biru'],
                ['id_alamat' => '16','rw' => 1, 'rt' => 3, 'kel' => 'Arjosari', 'kecamatan' => 'Blimbing', 'jalan' => 'Jl. Anggrek Ungu'],
        ];
        AlamatModel::insert($alamat);

    }
}
