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
                    'kel/desa' => 'Prigi',
                    'kecamatan' => 'Kanor',
                    'jalan' => 'Jl. Raya Prigi'
                ],
                [
                    'id_alamat' => '2',
                    'rw' => '1',
                    'rt' => '1',
                    'kel/desa' => 'Prigi',
                    'kecamatan' => 'Kanor',
                    'jalan' => 'Jl. Raya Prigi'
                ],
                [
                    'id_alamat' => '3',
                    'rw' => '1',
                    'rt' => '1',
                    'kel/desa' => 'Prigi',
                    'kecamatan' => 'Kanor',
                    'jalan' => 'Jl. Raya Prigi'
                ],
                [
                    'id_alamat' => '4',
                    'rw' => '1',
                    'rt' => '1',
                    'kel/desa' => 'Prigi',
                    'kecamatan' => 'Kanor',
                    'jalan' => 'Jl. Raya Prigi'
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
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '1',
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
                    'no_kk' => '3522110504040001',
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '2',
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
                    'no_kk' => '3522110504040001',
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '3',
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
                    'no_kk' => '3522110504040002',
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '3',
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
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '3',
                ],
            ];
        PendudukModel::insert($penduduk);
    }
}
