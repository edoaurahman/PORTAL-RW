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

                // abid nik 6-21 (RT1)

                // RT 7
                ['nik' => '3522110504040006', 'nama' => "Rizki Pratama", 'tempat_lahir' => 'Jakarta', 'tgl_lahir' => '2005-11-25', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'AB', 'no_kk' => '3522110504041006', 'no_hp' => '081234567890', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 7, 'image' => url('assets/images/user/user-06.png')],
                ['nik' => '3522110504040007', 'nama' => "Ari Kurniawan", 'tempat_lahir' => 'Semarang', 'tgl_lahir' => '2004-08-21', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'A', 'no_kk' => '3522110504041006', 'no_hp' => '081234567891', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 7, 'image' => url('assets/images/user/user-07.png')],
                ['nik' => '3522110504040008', 'nama' => "Dewi Susanti", 'tempat_lahir' => 'Bandung', 'tgl_lahir' => '2003-02-14', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'B', 'no_kk' => '3522110504041006', 'no_hp' => '081234567892', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 7, 'image' => url('assets/images/user/user-08.png')],
                ['nik' => '3522110504040009', 'nama' => "Rina Puspitasari", 'tempat_lahir' => 'Medan', 'tgl_lahir' => '2002-07-19', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504041006', 'no_hp' => '081234567893', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 7, 'image' => url('assets/images/user/user-09.png')],

                // RT 8
                ['nik' => '3522110504040010', 'nama' => "Joko Widodo", 'tempat_lahir' => 'Yogyakarta', 'tgl_lahir' => '2006-05-10', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Buddha', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'AB', 'no_kk' => '3522110504041007', 'no_hp' => '081234567894', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 8, 'image' => url('assets/images/user/user-10.png')],
                ['nik' => '3522110504040011', 'nama' => "Rizki Andrian", 'tempat_lahir' => 'Surabaya', 'tgl_lahir' => '2005-09-12', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'A', 'no_kk' => '3522110504041007', 'no_hp' => '081234567895', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 8, 'image' => url('assets/images/user/user-11.png')],
                ['nik' => '3522110504040012', 'nama' => "Ari Sutrisno", 'tempat_lahir' => 'Bandung', 'tgl_lahir' => '2004-06-15', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'B', 'no_kk' => '3522110504041007', 'no_hp' => '081234567896', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 8, 'image' => url('assets/images/user/user-12.png')],
                ['nik' => '3522110504040013', 'nama' => "Dewi Ayu", 'tempat_lahir' => 'Makassar', 'tgl_lahir' => '2003-11-23', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Buddha', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504041007', 'no_hp' => '081234567897', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 8, 'image' => url('assets/images/user/user-13.png')],

                // RT 9
                ['nik' => '3522110504040014', 'nama' => "Rina Andriani", 'tempat_lahir' => 'Surabaya', 'tgl_lahir' => '2002-01-12', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504041008', 'no_hp' => '081234567898', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 9, 'image' => url('assets/images/user/user-14.png')],
                ['nik' => '3522110504040015', 'nama' => "Joko Saputra", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2006-12-17', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'B', 'no_kk' => '3522110504041008', 'no_hp' => '081234567899', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 9, 'image' => url('assets/images/user/user-15.png')],
                ['nik' => '3522110504040016', 'nama' => "Rizki Darmawan", 'tempat_lahir' => 'Surabaya', 'tgl_lahir' => '2005-09-12', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'A', 'no_kk' => '3522110504041008', 'no_hp' => '081234567900', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 9, 'image' => url('assets/images/user/user-16.png')],
                ['nik' => '3522110504040017', 'nama' => "Ari Prasetyo", 'tempat_lahir' => 'Bandung', 'tgl_lahir' => '2004-06-15', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'B', 'no_kk' => '3522110504041008', 'no_hp' => '081234567901', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 9, 'image' => url('assets/images/user/user-17.png')],

                // RT 10
                ['nik' => '3522110504040018', 'nama' => "Dewi Wulandari", 'tempat_lahir' => 'Bali', 'tgl_lahir' => '2003-08-09', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Buddha', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504041009', 'no_hp' => '081234567902', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 10, 'image' => url('assets/images/user/user-18.png')],
                ['nik' => '3522110504040019', 'nama' => "Budi Santoso", 'tempat_lahir' => 'Surabaya', 'tgl_lahir' => '2006-05-10', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'AB', 'no_kk' => '3522110504041009', 'no_hp' => '081234567903', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 10, 'image' => url('assets/images/user/user-19.png')],
                ['nik' => '3522110504040020', 'nama' => "Siti Nurhaliza", 'tempat_lahir' => 'Makassar', 'tgl_lahir' => '2004-02-21', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'A', 'no_kk' => '3522110504041009', 'no_hp' => '081234567904', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 10, 'image' => url('assets/images/user/user-20.png')],
                ['nik' => '3522110504040021', 'nama' => "Agus Prasetyo", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2002-09-30', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'B', 'no_kk' => '3522110504041009', 'no_hp' => '081234567905', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 10, 'image' => url('assets/images/user/user-21.png')],


                // putra nik 22-37 (RT2)
                //kk1
                ['nik' => '3522110504040022', 'nama' => "Joko Widodido", 'tempat_lahir' => 'Solo', 'tgl_lahir' => '2006-04-15', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'B', 'no_kk' => '3522110504040010', 'no_hp' => '081234512393', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 11, 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040023', 'nama' => "Budi Setiawan", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '1985-01-01', 'jenis_kelamin' => 'Laki-laki', 'agama' => 'Islam', 'status_perkawinan' => 'Kawin', 'pekerjaan' => 'Pegawai Swasta', 'gol_darah' => 'A', 'no_kk' => '3522110504040010', 'no_hp' => '081234567890', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 11, 'image' => url('assets/images/user/user-02.png'),],
                ['nik' => '3522110504040024', 'nama' => "Ani Lestari", 'tempat_lahir' => 'Surabaya', 'tgl_lahir' => '1990-07-17', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Kristen', 'status_perkawinan' => 'Kawin', 'pekerjaan' => 'Ibu Rumah Tangga', 'gol_darah' => 'AB', 'no_kk' => '3522110504040010', 'no_hp' => '085728394051', 'status_penduduk' => 'Pendatang', 'id_alamat' => 11, 'image' => url('assets/images/user/user-03.png'),],
                ['nik' => '3522110504040025', 'nama' => "Dimas Pratama", 'tempat_lahir' => 'Jember', 'tgl_lahir' => '1995-03-23', 'jenis_kelamin' => 'Laki-laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040010', 'no_hp' => '081234578901', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 11, 'image' => url('assets/images/user/user-04.png'),],
                //kk2
                ['nik' => '3522110504040026', 'nama' => "Andi Setiawan", 'tempat_lahir' => 'Kediri', 'tgl_lahir' => '2002-05-14', 'jenis_kelamin' => 'Laki-laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'B', 'no_kk' => '3522110504040011', 'no_hp' => '087890123456', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => 12, 'image' => url('assets/images/user/user-06.png'),],
                ['nik' => '3522110504040027', 'nama' => "Rina Sari", 'tempat_lahir' => 'Blitar', 'tgl_lahir' => '1998-12-08', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Katolik', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Wiraswasta', 'gol_darah' => 'AB', 'no_kk' => '3522110504040011', 'no_hp' => '085678901234', 'status_penduduk' => 'Pendatang', 'id_alamat' => 12, 'image' => url('assets/images/user/user-05.png'),],
                ['nik' => '3522110504040028', 'nama' => "Bella Puspita", 'tempat_lahir' => 'Probolinggo', 'tgl_lahir' => '2000-11-21', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040011', 'no_hp' => '089012345678', 'status_penduduk' => 'Pendatang', 'id_alamat' => 12, 'image' => url('assets/images/user/user-07.png'),],
                ['nik' => '3522110504040029', 'nama' => "Rizki Pratama", 'tempat_lahir' => 'Surabaya', 'tgl_lahir' => '2001-02-15', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'B', 'no_kk' => '3522110504040011', 'no_hp' => '089012345679', 'status_penduduk' => 'Pendatang', 'id_alamat' => 12, 'image' => url('assets/images/user/user-08.png'),],
                //kk3
                ['nik' => '3522110504040030', 'nama' => "Lutfi Alamsyah", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2002-03-20', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040012', 'no_hp' => '089012345680', 'status_penduduk' => 'Pendatang', 'id_alamat' => 13, 'image' => url('assets/images/user/user-09.png'),],
                ['nik' => '3522110504040031', 'nama' => "Dewi Ayu", 'tempat_lahir' => 'Banyuwangi', 'tgl_lahir' => '2003-04-25', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040012', 'no_hp' => '089012345681', 'status_penduduk' => 'Pendatang', 'id_alamat' => 13, 'image' => url('assets/images/user/user-10.png'),],
                ['nik' => '3522110504040032', 'nama' => "Rahmat Hidayat", 'tempat_lahir' => 'Jember', 'tgl_lahir' => '2004-05-30', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040012', 'no_hp' => '089012345682', 'status_penduduk' => 'Pendatang', 'id_alamat' => 13, 'image' => url('assets/images/user/user-11.png'),],
                ['nik' => '3522110504040033', 'nama' => "Nurul Huda", 'tempat_lahir' => 'Kediri', 'tgl_lahir' => '2005-06-15', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040012', 'no_hp' => '089012345683', 'status_penduduk' => 'Pendatang', 'id_alamat' => 13, 'image' => url('assets/images/user/user-12.png'),],
                //kk4
                ['nik' => '3522110504040034', 'nama' => "Fajar Pratama", 'tempat_lahir' => 'Madiun', 'tgl_lahir' => '2006-07-20', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040013', 'no_hp' => '089012345684', 'status_penduduk' => 'Pendatang', 'id_alamat' => 14, 'image' => url('assets/images/user/user-13.png'),],
                ['nik' => '3522110504040035', 'nama' => "Rina Fitri", 'tempat_lahir' => 'Blitar', 'tgl_lahir' => '2007-08-25', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040013', 'no_hp' => '089012345685', 'status_penduduk' => 'Pendatang', 'id_alamat' => 14, 'image' => url('assets/images/user/user-14.png'),],
                ['nik' => '3522110504040036', 'nama' => "Arief Pratama", 'tempat_lahir' => 'Klaten', 'tgl_lahir' => '2008-09-30', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040013', 'no_hp' => '089012345686', 'status_penduduk' => 'Pendatang', 'id_alamat' => 14, 'image' => url('assets/images/user/user-15.png'),],
                ['nik' => '3522110504040037', 'nama' => "Nurul Hadi", 'tempat_lahir' => 'Purworejo', 'tgl_lahir' => '2009-10-15', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040013', 'no_hp' => '089012345687', 'status_penduduk' => 'Pendatang', 'id_alamat' => 14, 'image' => url('assets/images/user/user-16.png'),],

                // anang nik 38-53 (RT3)

                // zaki nik 54 - 69 (RT4)

                // edo nik 70 - 85 (RT5)
                // KK 1
                ['nik' => '3522110504040070', 'nama' => "Oman Narpati", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '1986-05-04', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Kawin', 'pekerjaan' => 'Wirausaha', 'gol_darah' => 'O', 'no_kk' => '3522110504040022', 'no_hp' => '081234567890', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => '23', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040071', 'nama' => "Pia Permata", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '1988-05-04', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Islam', 'status_perkawinan' => 'Kawin', 'pekerjaan' => 'Ibu Rumah Tangga', 'gol_darah' => 'A', 'no_kk' => '3522110504040022', 'no_hp' => '081234567890', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => '23', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040072', 'nama' => "Kezia Susanti", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2006-02-02', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'AB', 'no_kk' => '3522110504040022', 'no_hp' => '081234567890', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => '23', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040073', 'nama' => "Anastasia Susanti", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2010-01-02', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'B', 'no_kk' => '3522110504040022', 'no_hp' => '081234567890', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => '23', 'image' => url('assets/images/user/user-01.png')],
                // KK 2
                ['nik' => '3522110504040074', 'nama' => "Panca Dongoran", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '1990-08-01', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Katholik', 'status_perkawinan' => 'Kawin', 'pekerjaan' => 'Karyawan BUMN', 'gol_darah' => 'A', 'no_kk' => '3522110504040023', 'no_hp' => '081234567890', 'status_penduduk' => 'Pendatang', 'id_alamat' => '24', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040075', 'nama' => "Novi Usamah", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '1986-03-03', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Katholik', 'status_perkawinan' => 'Kawin', 'pekerjaan' => 'Ibu Rumah Tangga', 'gol_darah' => 'B', 'no_kk' => '3522110504040023', 'no_hp' => '081234567890', 'status_penduduk' => 'Pendatang', 'id_alamat' => '24', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040076', 'nama' => "Maras Firgantoro", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2003-10-10', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Katholik', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'O', 'no_kk' => '3522110504040023', 'no_hp' => '081234567890', 'status_penduduk' => 'Pendatang', 'id_alamat' => '24', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040077', 'nama' => "Cengkir Rajasa", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2005-03-03', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Katholik', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Pelajar', 'gol_darah' => 'O', 'no_kk' => '3522110504040023', 'no_hp' => '081234567890', 'status_penduduk' => 'Pendatang', 'id_alamat' => '24', 'image' => url('assets/images/user/user-01.png')],
                // KK 3
                ['nik' => '3522110504040078', 'nama' => "Sidiq Mansur", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '1976-01-09', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Kawin', 'pekerjaan' => 'Karyawan Swasta', 'gol_darah' => 'O', 'no_kk' => '3522110504040024', 'no_hp' => '081234567890', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => '25', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040079', 'nama' => "Maria Hastuti", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '1980-05-08', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Kristen', 'status_perkawinan' => 'Kawin', 'pekerjaan' => 'Karyawan Swasta', 'gol_darah' => 'O', 'no_kk' => '3522110504040024', 'no_hp' => '081234567890', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => '25', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040080', 'nama' => "Ida Purwanti", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2002-11-11', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Karyawan Swasta', 'gol_darah' => 'O', 'no_kk' => '3522110504040024', 'no_hp' => '081234567890', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => '25', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040081', 'nama' => "Mustofa Saefullah", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '1998-10-12', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Wirausaha', 'gol_darah' => 'O', 'no_kk' => '3522110504040024', 'no_hp' => '081234567890', 'status_penduduk' => 'Penduduk Tetap', 'id_alamat' => '25', 'image' => url('assets/images/user/user-01.png')],
                // KK 4
                ['nik' => '3522110504040082', 'nama' => "Jaka Pratama", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '1984-02-06', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Kawin', 'pekerjaan' => 'Petani', 'gol_darah' => 'O', 'no_kk' => '3522110504040025', 'no_hp' => '081234567890', 'status_penduduk' => 'Pendatang', 'id_alamat' => '26', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040083', 'nama' => "Wani Oktaviani", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '1986-06-07', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Kawin', 'pekerjaan' => 'Petani', 'gol_darah' => 'O', 'no_kk' => '3522110504040025', 'no_hp' => '081234567890', 'status_penduduk' => 'Pendatang', 'id_alamat' => '26', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040084', 'nama' => "Dono Iswahyudi", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2001-09-09', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040025', 'no_hp' => '081234567890', 'status_penduduk' => 'Pendatang', 'id_alamat' => '26', 'image' => url('assets/images/user/user-01.png')],
                ['nik' => '3522110504040085', 'nama' => "Harimurti Suryono", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '1999-01-01', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Karyawan Swasta', 'gol_darah' => 'O', 'no_kk' => '3522110504040025', 'no_hp' => '081234567890', 'status_penduduk' => 'Pendatang', 'id_alamat' => '26', 'image' => url('assets/images/user/user-01.png')],
                // siapa saja 86 - 101 (RT 6)
                //kk1
                ['nik' => '3522110504040086', 'nama' => "Anwar Halan", 'tempat_lahir' => 'Purworejo', 'tgl_lahir' => '2009-10-15', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040026', 'no_hp' => '089012345687', 'status_penduduk' => 'Pendatang', 'id_alamat' => 27, 'image' => url('assets/images/user/user-16.png'),],
                ['nik' => '3522110504040087', 'nama' => "Arya Chandra", 'tempat_lahir' => 'Yogyakarta', 'tgl_lahir' => '2009-11-20', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040026', 'no_hp' => '089012345688', 'status_penduduk' => 'Pendatang', 'id_alamat' => 27, 'image' => url('assets/images/user/user-17.png'),],
                ['nik' => '3522110504040088', 'nama' => "Sugiono", 'tempat_lahir' => 'Semarang', 'tgl_lahir' => '2010-12-25', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040026', 'no_hp' => '089012345689', 'status_penduduk' => 'Pendatang', 'id_alamat' => 27, 'image' => url('assets/images/user/user-18.png'),],
                ['nik' => '3522110504040089', 'nama' => "Azizi Shafa", 'tempat_lahir' => 'Surabaya', 'tgl_lahir' => '2011-01-30', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040026', 'no_hp' => '089012345690', 'status_penduduk' => 'Pendatang', 'id_alamat' => 27, 'image' => url('assets/images/user/user-19.png'),],
                //kk2
                ['nik' => '3522110504040090', 'nama' => "Crish Evans", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2012-02-15', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040027', 'no_hp' => '089012345691', 'status_penduduk' => 'Pendatang', 'id_alamat' => 28, 'image' => url('assets/images/user/user-20.png'),],
                ['nik' => '3522110504040091', 'nama' => "Tukinem", 'tempat_lahir' => 'Banyuwangi', 'tgl_lahir' => '2013-03-20', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040027', 'no_hp' => '089012345692', 'status_penduduk' => 'Pendatang', 'id_alamat' => 28, 'image' => url('assets/images/user/user-21.png'),],
                ['nik' => '3522110504040092', 'nama' => "Brush Banner", 'tempat_lahir' => 'Kediri', 'tgl_lahir' => '2014-04-25', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040027', 'no_hp' => '089012345693', 'status_penduduk' => 'Pendatang', 'id_alamat' => 28, 'image' => url('assets/images/user/user-22.png'),],
                ['nik' => '3522110504040093', 'nama' => "Natasya", 'tempat_lahir' => 'Madiun', 'tgl_lahir' => '2015-05-30', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040027', 'no_hp' => '089012345694', 'status_penduduk' => 'Pendatang', 'id_alamat' => 28, 'image' => url('assets/images/user/user-23.png'),],
                //kk3
                ['nik' => '3522110504040094', 'nama' => "Nick Fury", 'tempat_lahir' => 'Blitar', 'tgl_lahir' => '2016-06-15', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040028', 'no_hp' => '089012345695', 'status_penduduk' => 'Pendatang', 'id_alamat' => 29, 'image' => url('assets/images/user/user-24.png'),],
                ['nik' => '3522110504040095', 'nama' => "Karina Hill", 'tempat_lahir' => 'Purworejo', 'tgl_lahir' => '2017-07-20', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040028', 'no_hp' => '089012345696', 'status_penduduk' => 'Pendatang', 'id_alamat' => 29, 'image' => url('assets/images/user/user-25.png'),],
                ['nik' => '3522110504040096', 'nama' => "Baron Moskov", 'tempat_lahir' => 'Yogyakarta', 'tgl_lahir' => '2018-08-25', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040028', 'no_hp' => '089012345697', 'status_penduduk' => 'Pendatang', 'id_alamat' => 29, 'image' => url('assets/images/user/user-26.png'),],
                ['nik' => '3522110504040097', 'nama' => "Deadpool Halim", 'tempat_lahir' => 'Semarang', 'tgl_lahir' => '2019-09-30', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040028', 'no_hp' => '089012345698', 'status_penduduk' => 'Pendatang', 'id_alamat' => 29, 'image' => url('assets/images/user/user-27.png'),],
                //kk4
                ['nik' => '3522110504040098', 'nama' => "Toni Starkus", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2021-11-20', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040029', 'no_hp' => '089012345700', 'status_penduduk' => 'Pendatang', 'id_alamat' => 30, 'image' => url('assets/images/user/user-29.png'),],
                ['nik' => '3522110504040099', 'nama' => "Papper Pots", 'tempat_lahir' => 'Surabaya', 'tgl_lahir' => '2020-10-15', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040029', 'no_hp' => '089012345699', 'status_penduduk' => 'Pendatang', 'id_alamat' => 30, 'image' => url('assets/images/user/user-28.png'),],
                ['nik' => '3522110504040100', 'nama' => "Sri Maggie", 'tempat_lahir' => 'Banyuwangi', 'tgl_lahir' => '2022-12-25', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040029', 'no_hp' => '089012345701', 'status_penduduk' => 'Pendatang', 'id_alamat' => 30, 'image' => url('assets/images/user/user-30.png'),],
                ['nik' => '3522110504040101', 'nama' => "Harafsan Jumat", 'tempat_lahir' => 'Kediri', 'tgl_lahir' => '2023-01-30', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040029', 'no_hp' => '089012345702', 'status_penduduk' => 'Pendatang', 'id_alamat' => 30, 'image' => url('assets/images/user/user-31.png'),],

                // siapa aja 102 - 117 (RT7)
                //kk1
                ['nik' => '3522110504040102', 'nama' => "Anies BasBetot", 'tempat_lahir' => 'Blitar', 'tgl_lahir' => '2025-03-20', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040030', 'no_hp' => '089012345704', 'status_penduduk' => 'Pendatang', 'id_alamat' => 31, 'image' => url('assets/images/user/user-33.png'),],
                ['nik' => '3522110504040103', 'nama' => "Atik Des Kiyowa", 'tempat_lahir' => 'Madiun', 'tgl_lahir' => '2024-02-15', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040030', 'no_hp' => '089012345703', 'status_penduduk' => 'Pendatang', 'id_alamat' => 31, 'image' => url('assets/images/user/user-32.png'),],
                ['nik' => '3522110504040104', 'nama' => "Budianti Sirregar", 'tempat_lahir' => 'Purworejo', 'tgl_lahir' => '2026-04-25', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040030', 'no_hp' => '089012345705', 'status_penduduk' => 'Pendatang', 'id_alamat' => 31, 'image' => url('assets/images/user/user-34.png'),],
                ['nik' => '3522110504040105', 'nama' => "Gibriel Jakasembung", 'tempat_lahir' => 'Yogyakarta', 'tgl_lahir' => '2027-05-30', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040030', 'no_hp' => '089012345706', 'status_penduduk' => 'Pendatang', 'id_alamat' => 31, 'image' => url('assets/images/user/user-35.png'),],
                //kk2
                ['nik' => '3522110504040106', 'nama' => "Windah Batubara", 'tempat_lahir' => 'Semarang', 'tgl_lahir' => '2028-06-15', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040031', 'no_hp' => '089012345707', 'status_penduduk' => 'Pendatang', 'id_alamat' => 32, 'image' => url('assets/images/user/user-36.png'),],
                ['nik' => '3522110504040107', 'nama' => "Agnes Feronica", 'tempat_lahir' => 'Surabaya', 'tgl_lahir' => '2029-07-20', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040031', 'no_hp' => '089012345708', 'status_penduduk' => 'Pendatang', 'id_alamat' => 32, 'image' => url('assets/images/user/user-37.png'),],
                ['nik' => '3522110504040108', 'nama' => "Krispi Sendi", 'tempat_lahir' => 'Malang', 'tgl_lahir' => '2030-08-25', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040031', 'no_hp' => '089012345709', 'status_penduduk' => 'Pendatang', 'id_alamat' => 32, 'image' => url('assets/images/user/user-38.png'),],
                ['nik' => '3522110504040109', 'nama' => "Lutfi Rahmawatian", 'tempat_lahir' => 'Purworejo', 'tgl_lahir' => '2031-09-30', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040031', 'no_hp' => '089012345711', 'status_penduduk' => 'Pendatang', 'id_alamat' => 32, 'image' => url('assets/images/user/user-39.png'),],
                //kk3
                ['nik' => '3522110504040110', 'nama' => "Kairi Kumar", 'tempat_lahir' => 'Yogyakarta', 'tgl_lahir' => '2032-10-15', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040032', 'no_hp' => '089012345712', 'status_penduduk' => 'Pendatang', 'id_alamat' => 33, 'image' => url('assets/images/user/user-40.png'),],
                ['nik' => '3522110504040111', 'nama' => "Budiono Sirregar", 'tempat_lahir' => 'Semarang', 'tgl_lahir' => '2033-11-20', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040032', 'no_hp' => '089012345713', 'status_penduduk' => 'Pendatang', 'id_alamat' => 33, 'image' => url('assets/images/user/user-41.png'),],
                ['nik' => '3522110504040112', 'nama' => "Shani Indira", 'tempat_lahir' => 'Surabaya', 'tgl_lahir' => '2034-12-25', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040032', 'no_hp' => '089012345714', 'status_penduduk' => 'Pendatang', 'id_alamat' => 33, 'image' => url('assets/images/user/user-42.png'),],
                ['nik' => '3522110504040113', 'nama' => "Kapal Lawd", 'tempat_lahir' => 'Kediri', 'tgl_lahir' => '2035-01-30', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040032', 'no_hp' => '089012345715', 'status_penduduk' => 'Pendatang', 'id_alamat' => 33, 'image' => url('assets/images/user/user-43.png'),],
                //kk4
                ['nik' => '3522110504040114', 'nama' => "King Abdi", 'tempat_lahir' => 'Blitar', 'tgl_lahir' => '2037-03-20', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Hindu', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'AB', 'no_kk' => '3522110504040033', 'no_hp' => '089012345717', 'status_penduduk' => 'Pendatang', 'id_alamat' => 34, 'image' => url('assets/images/user/user-45.png'),],
                ['nik' => '3522110504040115', 'nama' => "Shef Renata", 'tempat_lahir' => 'Madiun', 'tgl_lahir' => '2036-02-15', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040033', 'no_hp' => '089012345716', 'status_penduduk' => 'Pendatang', 'id_alamat' => 34, 'image' => url('assets/images/user/user-44.png'),],
                ['nik' => '3522110504040116', 'nama' => "Lucinta Kaprikon", 'tempat_lahir' => 'Purworejo', 'tgl_lahir' => '2038-04-25', 'jenis_kelamin' => 'Perempuan', 'agama' => 'Islam', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'A', 'no_kk' => '3522110504040033', 'no_hp' => '089012345718', 'status_penduduk' => 'Pendatang', 'id_alamat' => 34, 'image' => url('assets/images/user/user-46.png'),],
                ['nik' => '3522110504040117', 'nama' => "Arnold Hasibuan", 'tempat_lahir' => 'Yogyakarta', 'tgl_lahir' => '2039-05-30', 'jenis_kelamin' => 'Laki-Laki', 'agama' => 'Kristen', 'status_perkawinan' => 'Belum Kawin', 'pekerjaan' => 'Mahasiswa', 'gol_darah' => 'O', 'no_kk' => '3522110504040033', 'no_hp' => '089012345719', 'status_penduduk' => 'Pendatang', 'id_alamat' => 34, 'image' => url('assets/images/user/user-47.png'),],
            ];
        PendudukModel::insert($penduduk);
    }
}
