<?php

namespace Database\Seeders;

use App\Models\AlamatModel;
use App\Models\KkModel;
use App\Models\PendudukModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alamat =
            [
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
                    'rt' => '1',
                    'kel' => 'Prigi',
                    'kecamatan' => 'Kanor',
                    'jalan' => 'Jl. Raya Prigi'
                ],
                [
                    'id_alamat' => '3',
                    'rw' => '1',
                    'rt' => '1',
                    'kel' => 'Prigi',
                    'kecamatan' => 'Kanor',
                    'jalan' => 'Jl. Raya Prigi'
                ],
                [
                    'id_alamat' => '4',
                    'rw' => '1',
                    'rt' => '1',
                    'kel' => 'Prigi',
                    'kecamatan' => 'Kanor',
                    'jalan' => 'Jl. Raya Prigi'
                ],
                [
                    'id_alamat' => '5',
                    'rw' => '1',
                    'rt' => '1',
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
            ];
        AlamatModel::insert($alamat);
        $kk = [
            [
                'no_kk' => '3522110504040001',
                'nik_kepalakeluarga' => '3522110504040006',
            ],
            [
                'no_kk' => '3522110504040002',
                'nik_kepalakeluarga' => '3522110504040008',
            ],
            [
                'no_kk' => '3522110504040003',
                'nik_kepalakeluarga' => '3522110504040007',
            ],
            [
                'no_kk' => '3522110504040004',
                'nik_kepalakeluarga' => '3522110504040009',
            ],
        ];
        KkModel::insert($kk);
        $penduduk =
            [
                [
                    'nik' => '3522110504040006',
                    'nama' => "Ridho Aulia' Rahman",
                    'tempat_lahir' => 'Bojonegoro',
                    'tgl_lahir' => '2004-05-04',
                    'jenis_kelamin' => 'Laki-Laki',
                    'agama' => 'Islam',
                    'status_perkawinan' => 'Belum Kawin',
                    'pekerjaan' => 'Pelajar',
                    'gol_darah' => 'O',
                    'no_kk' => '3522110504040001',
                    'no_hp' => '083193985902',
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '1',
                    'image' => url('assets/images/user/user-01.png')
                ],
                [
                    'nik' => '3522110504040007',
                    'nama' => "Anang",
                    'tempat_lahir' => 'Bojonegoro',
                    'tgl_lahir' => '2004-05-04',
                    'jenis_kelamin' => 'Laki-Laki',
                    'agama' => 'Islam',
                    'status_perkawinan' => 'Belum Kawin',
                    'pekerjaan' => 'Pelajar',
                    'gol_darah' => 'O',
                    'no_kk' => '3522110504040003',
                    'no_hp' => '081234567890',
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '2',
                    'image' => url('assets/images/user/user-01.png')
                ],
                [
                    'nik' => '3522110504040008',
                    'nama' => "Abid",
                    'tempat_lahir' => 'Bojonegoro',
                    'tgl_lahir' => '2004-05-04',
                    'jenis_kelamin' => 'Laki-Laki',
                    'agama' => 'Islam',
                    'status_perkawinan' => 'Belum Kawin',
                    'pekerjaan' => 'Pelajar',
                    'gol_darah' => 'O',
                    'no_kk' => '3522110504040002',
                    'no_hp' => '081234567890',
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '3',
                    'image' => url('assets/images/user/user-01.png')
                ],
                [
                    'nik' => '3522110504040009',
                    'nama' => "Putra",
                    'tempat_lahir' => 'Bojonegoro',
                    'tgl_lahir' => '2004-05-04',
                    'jenis_kelamin' => 'Laki-Laki',
                    'agama' => 'Islam',
                    'status_perkawinan' => 'Belum Kawin',
                    'pekerjaan' => 'Pelajar',
                    'gol_darah' => 'O',
                    'no_kk' => '3522110504040004',
                    'no_hp' => '081234567890',
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '4',
                    'image' => url('assets/images/user/user-01.png')
                ],
                [
                    'nik' => '3522110504040010',
                    'nama' => "Zaki",
                    'tempat_lahir' => 'Bojonegoro',
                    'tgl_lahir' => '2004-05-04',
                    'jenis_kelamin' => 'Laki-Laki',
                    'agama' => 'Islam',
                    'status_perkawinan' => 'Belum Kawin',
                    'pekerjaan' => 'Pelajar',
                    'gol_darah' => 'O',
                    'no_kk' => '3522110504040002',
                    'no_hp' => '081234567890',
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '5',
                    'image' => url('assets/images/user/user-01.png')
                ],
                [
                    'nik' => '3522110504040012',
                    'nama' => "Caca Putri",
                    'tempat_lahir' => 'Pomorogo',
                    'tgl_lahir' => '2006-04-15',
                    'jenis_kelamin' => 'Perempuan',
                    'agama' => 'Hindu',
                    'status_perkawinan' => 'Belum Kawin',
                    'pekerjaan' => 'Pelajar',
                    'gol_darah' => 'B',
                    'no_kk' => '3522110504040002',
                    'no_hp' => '081234512393',
                    'status_penduduk' => 'Penduduk Tetap',
                    'id_alamat' => '6',
                    'image' => url('assets/images/user/user-01.png')
                ],
            ];
        PendudukModel::insert($penduduk);
    }
}
