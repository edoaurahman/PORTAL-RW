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
        $penduduk =
            [
                [
                    'nik' => '3522110504040001',
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
                    'nik' => '3522110504040002',
                    'nama' => "Anang",
                    'tempat_lahir' => 'Bojonegoro',
                    'tgl_lahir' => '2004-05-04',
                    'jenis_kelamin' => 'Laki-Laki',
                    'agama' => 'Islam',
                    'status_perkawinan' => 'Belum Kawin',
                    'pekerjaan' => 'Pelajar',
                    'gol_darah' => 'O',
                    'no_kk' => '3522110504040001',
                    'no_hp' => '081234567890',
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '2',
                    'image' => url('assets/images/user/user-01.png')
                ],
                [
                    'nik' => '3522110504040003',
                    'nama' => "Abid",
                    'tempat_lahir' => 'Bojonegoro',
                    'tgl_lahir' => '2004-05-04',
                    'jenis_kelamin' => 'Laki-Laki',
                    'agama' => 'Islam',
                    'status_perkawinan' => 'Belum Kawin',
                    'pekerjaan' => 'Pelajar',
                    'gol_darah' => 'O',
                    'no_kk' => '3522110504040001',
                    'no_hp' => '081234567890',
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '3',
                    'image' => url('assets/images/user/user-01.png')
                ],
                [
                    'nik' => '3522110504040004',
                    'nama' => "Putra",
                    'tempat_lahir' => 'Bojonegoro',
                    'tgl_lahir' => '2004-05-04',
                    'jenis_kelamin' => 'Laki-Laki',
                    'agama' => 'Islam',
                    'status_perkawinan' => 'Belum Kawin',
                    'pekerjaan' => 'Pelajar',
                    'gol_darah' => 'O',
                    'no_kk' => '3522110504040001',
                    'no_hp' => '081234567890',
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '4',
                    'image' => url('assets/images/user/user-01.png')
                ],
                [
                    'nik' => '3522110504040005',
                    'nama' => "Zaki",
                    'tempat_lahir' => 'Bojonegoro',
                    'tgl_lahir' => '2004-05-04',
                    'jenis_kelamin' => 'Laki-Laki',
                    'agama' => 'Islam',
                    'status_perkawinan' => 'Belum Kawin',
                    'pekerjaan' => 'Pelajar',
                    'gol_darah' => 'O',
                    'no_kk' => '3522110504040001',
                    'no_hp' => '081234567890',
                    'status_penduduk' => 'Pendatang',
                    'id_alamat' => '5',
                    'image' => url('assets/images/user/user-01.png')
                ],
            ];
        PendudukModel::insert($penduduk);
    }
}
