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

                // abid nik 6-21

                // putra nik 22-37
                //kk1
                ['nik' => '3522110504040022', 'nama' => "Joko Widodido", 'tempat_lahir' => 'Solo', 'tgl_lahir' => '2006-04-15', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'B', 'no_kk' => '3522110504040010', 'no_hp' => '081234512393', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => '6', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040023', 'nama' => "Budi Setiawan", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '1985-01-01', 'jenis_kelamin' => 'Laki-laki', 'agama' => 'Islam', 'status_perkawinan' => 'Kawin', 'pekerjaan' => 'Pegawai Swasta', 'gol_darah' => 'A', 'no_kk' => '3522110504040010', 'no_hp' => '081234567890', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 7, 'image' => url('assets/images/user/user-02.png'),],
                ['nik' => '3522110504040024', 'nama' => "Ani Lestari", 'tempat_lahir' => 'Surabaya', 'tgl_lahir' => '1990-07-17', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Kristen', 'status_perkawinan' => 'Kawin', 'pekerjaan' => 'Ibu Rumah Tangga', 'gol_darah' => 'AB', 'no_kk' => '3522110504040010', 'no_hp' => '085728394051', 'status_penduduk' => 'Pendatang', 'id_alamat' => 8, 'image' => url('assets/images/user/user-03.png'),],
                ['nik' => '3522110504040025', 'nama' => "Dimas Pratama", 'tempat_lahir' => 'Jember', 'tgl_lahir' => '1995-03-23', 'jenis_kelamin' => 'Laki-laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040010', 'no_hp' => '081234578901', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 9, 'image' => url('assets/images/user/user-04.png'),],
                //kk2
                ['nik' => '3522110504040026', 'nama' => "Andi Setiawan", 'tempat_lahir' => 'Kediri', 'tgl_lahir' => '2002-05-14', 'jenis_kelamin' => 'Laki-laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'B', 'no_kk' => '3522110504040011', 'no_hp' => '087890123456', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 11, 'image' => url('assets/images/user/user-06.png'),],
                ['nik' => '3522110504040027', 'nama' => "Rina Sari", 'tempat_lahir' => 'Blitar', 'tgl_lahir' => '1998-12-08', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Katolik', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Wiraswasta', 'gol_darah' => 'AB', 'no_kk' => '3522110504040011', 'no_hp' => '085678901234', 'status_penduduk' => 'Pendatang', 'id_alamat' => 10, 'image' => url('assets/images/user/user-05.png'),],
                ['nik' => '3522110504040028', 'nama' => "Bella Puspita", 'tempat_lahir' => 'Probolinggo', 'tgl_lahir' => '2000-11-21', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040011', 'no_hp' => '089012345678', 'status_penduduk' => 'Pendatang', 'id_alamat' => 12, 'image' => url('assets/images/user/user-07.png'),],
                ['nik' => '3522110504040029', 'nama' => "Rizki Pratama", 'tempat_lahir' => 'Surabaya', 'tgl_lahir' => '2001-02-15', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'B', 'no_kk' => '3522110504040011', 'no_hp' => '089012345679', 'status_penduduk' => 'Pendatang', 'id_alamat' => 13, 'image' => url('assets/images/user/user-08.png'), ],
                //kk3
                ['nik' => '3522110504040030', 'nama' => "Lutfi Alamsyah", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2002-03-20', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040012', 'no_hp' => '089012345680', 'status_penduduk' => 'Pendatang', 'id_alamat' => 14, 'image' => url('assets/images/user/user-09.png'), ],
                ['nik' => '3522110504040031', 'nama' => "Dewi Ayu", 'tempat_lahir' => 'Banyuwangi', 'tgl_lahir' => '2003-04-25', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040012', 'no_hp' => '089012345681', 'status_penduduk' => 'Pendatang', 'id_alamat' => 15, 'image' => url('assets/images/user/user-10.png'), ],
                ['nik' => '3522110504040032', 'nama' => "Rahmat Hidayat", 'tempat_lahir' => 'Jember', 'tgl_lahir' => '2004-05-30', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040012', 'no_hp' => '089012345682', 'status_penduduk' => 'Pendatang', 'id_alamat' => 16, 'image' => url('assets/images/user/user-11.png'), ],
                ['nik' => '3522110504040033', 'nama' => "Nurul Huda", 'tempat_lahir' => 'Kediri', 'tgl_lahir' => '2005-06-15', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040012', 'no_hp' => '089012345683', 'status_penduduk' => 'Pendatang', 'id_alamat' => 17, 'image' => url('assets/images/user/user-12.png'), ],
                //kk4
                ['nik' => '3522110504040034', 'nama' => "Fajar Pratama", 'tempat_lahir' => 'Madiun', 'tgl_lahir' => '2006-07-20', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040013', 'no_hp' => '089012345684', 'status_penduduk' => 'Pendatang', 'id_alamat' => 18, 'image' => url('assets/images/user/user-13.png'), ],
                ['nik' => '3522110504040035', 'nama' => "Rina Fitri", 'tempat_lahir' => 'Blitar', 'tgl_lahir' => '2007-08-25', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040013', 'no_hp' => '089012345685', 'status_penduduk' => 'Pendatang', 'id_alamat' => 19, 'image' => url('assets/images/user/user-14.png'), ],
                ['nik' => '3522110504040036', 'nama' => "Arief Pratama", 'tempat_lahir' => 'Klaten', 'tgl_lahir' => '2008-09-30', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040013', 'no_hp' => '089012345686', 'status_penduduk' => 'Pendatang', 'id_alamat' => 20, 'image' => url('assets/images/user/user-15.png'), ],
                ['nik' => '3522110504040037', 'nama' => "Nurul Hadi", 'tempat_lahir' => 'Purworejo', 'tgl_lahir' => '2009-10-15', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040013', 'no_hp' => '089012345687', 'status_penduduk' => 'Pendatang', 'id_alamat' => 21, 'image' => url('assets/images/user/user-16.png'), ],

                // anang nik 38-53

                // zaki nik 54 - 69

                // edo nik 70 - 85

                // siapa saja 86 - 117
            ];
        PendudukModel::insert($penduduk);
    }
}
