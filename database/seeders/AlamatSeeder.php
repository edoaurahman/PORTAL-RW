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

            // abid (RT1)
            ["id_alamat" => "7", "rw" => 2, "rt" => 1, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Mawar No.43"],
            ["id_alamat" => "8", "rw" => 2, "rt" => 1, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Melati No. 21"],
            ["id_alamat" => "9", "rw" => 2, "rt" => 1, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Kenanga No. 34"],
            ["id_alamat" => "10", "rw" => 2, "rt" => 1, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Anggrek No. 45"],
            // putra (RT2)
            ["id_alamat" => "11", "rw" => 2, "rt" => 2, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Tulip No. 12"],
            ["id_alamat" => "12", "rw" => 2, "rt" => 2, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Dahlia No. 67"],
            ["id_alamat" => "13", "rw" => 2, "rt" => 2, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Mawar Merah No. 23"],
            ["id_alamat" => "14", "rw" => 2, "rt" => 2, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Melati Putih No. 34"],
            // anang (RT3)
            ["id_alamat" => "15", "rw" => 2, "rt" => 3, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Kenanga Biru No. 23"],
            ["id_alamat" => "16", "rw" => 2, "rt" => 3, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Anggrek Ungu No. 12"],
            ["id_alamat" => "17", "rw" => 2, "rt" => 3, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Flamboyan Merah No. 12"],
            ["id_alamat" => "18", "rw" => 2, "rt" => 3, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Matahari Pagi No. 23"],
            // zaki (RT4)
            ["id_alamat" => "19", "rw" => 2, "rt" => 4, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Cempaka Putih No. 34"],
            ["id_alamat" => "20", "rw" => 2, "rt" => 4, "kel" => "Kedungkandang", "kecamatan" => "Kedungkandang", "jalan" => "Jl. Melati Harum No. 45"],
            ["id_alamat" => "21", "rw" => 2, "rt" => 4, "kel" => "Kedungkandang", "kecamatan" => "Kedungkandang", "jalan" => "Jl. Mawar Merah No. 56"],
            ["id_alamat" => "22", "rw" => 2, "rt" => 4, "kel" => "Kedungkandang", "kecamatan" => "Kedungkandang", "jalan" => "Jl. Anggrek Ungu No. 67"],
            // edo (RT5)
            ["id_alamat" => "23", "rw" => 2, "rt" => 5, "kel" => "Sukun", "kecamatan" => "Sukun", "jalan" => "Jl. Flamboyan Merah No. 78"],
            ["id_alamat" => "24", "rw" => 2, "rt" => 5, "kel" => "Sukun", "kecamatan" => "Sukun", "jalan" => "Jl. Matahari Pagi No. 89"],
            ["id_alamat" => "25", "rw" => 2, "rt" => 5, "kel" => "Sukun", "kecamatan" => "Sukun", "jalan" => "Jl. Cempaka Putih No. 90"],
            ["id_alamat" => "32", "rw" => 2, "rt" => 5, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Mawar Elok No. 10"],
            // siapa saja (RT6)
            ["id_alamat" => "33", "rw" => 2, "rt" => 6, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Melati Mekar No. 11"],
            ["id_alamat" => "34", "rw" => 2, "rt" => 6, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Kenanga Harum No. 12"],
            ["id_alamat" => "35", "rw" => 2, "rt" => 6, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Anggrek Sejahtera No. 13"],
            ["id_alamat" => "36", "rw" => 2, "rt" => 6, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Mawar Permai No. 14"],
            // siapa aja (RT7)
            ["id_alamat" => "37", "rw" => 2, "rt" => 7, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Melati Asri No. 15"],
            ["id_alamat" => "38", "rw" => 2, "rt" => 7, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Kenanga Indah No. 16"],
            ["id_alamat" => "39", "rw" => 2, "rt" => 7, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Anggrek Lestari No. 17"],
            ["id_alamat" => "40", "rw" => 2, "rt" => 7, "kel" => "Arjosari", "kecamatan" => "Blimbing", "jalan" => "Jl. Anggrek Lestari No. 18"],
        ];
        AlamatModel::insert($alamat);

    }
}
