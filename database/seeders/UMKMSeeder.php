<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PendudukModel;
use App\Models\UMKMModel;

class UMKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mendapatkan semua NIK dari tabel penduduk
        $penduduk = PendudukModel::all();
        $nik = [];
        foreach ($penduduk as $p) {
            $nik[] = $p->nik;
        }

        // Mendapatkan NIK acak dari array $nik
        function getRandomNik($nikArray)
        {
            return $nikArray[array_rand($nikArray)];
        }

        // Data UMKM
        $UMKM = [
            ['id_umkm' => 1, 'nama_umkm' => 'UMKM Sari Rasa', 'cover' => 'assets/images/umkm/food_1.png', 'deskripsi' => 'UMKM yang bergerak di bidang kuliner tradisional.', 'hari' => "Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu", 'jam_buka' => '07:00', "jam_tutup" => '21:00', 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 2, 'nama_umkm' => 'UMKM Batik Indah', 'cover' => 'assets/images/umkm/food_2.png', 'deskripsi' => 'UMKM yang memproduksi batik dengan desain modern.', 'hari' => "Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu", 'jam_buka' => '07:00', "jam_tutup" => '21:00', 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 3, 'nama_umkm' => 'UMKM Teknologi Jaya', 'cover' => 'assets/images/umkm/food_3.png', 'deskripsi' => 'UMKM yang fokus pada inovasi teknologi terbaru.', 'hari' => "Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu", 'jam_buka' => '07:00', "jam_tutup" => '21:00', 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 4, 'nama_umkm' => 'UMKM Sehat Herbal', 'cover' => 'assets/images/umkm/food_4.png', 'deskripsi' => 'UMKM yang menjual produk-produk kesehatan berbasis herbal.', 'hari' => "Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu", 'jam_buka' => '07:00', "jam_tutup" => '21:00', 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 5, 'nama_umkm' => 'UMKM Pintar Edu', 'cover' => 'assets/images/umkm/food_5.png', 'deskripsi' => 'UMKM yang menyediakan layanan pendidikan online.', 'hari' => "Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu", 'jam_buka' => '07:00', "jam_tutup" => '21:00', 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 6, 'nama_umkm' => 'UMKM Tani Makmur', 'cover' => 'assets/images/umkm/food_6.png', 'deskripsi' => 'UMKM yang bergerak di bidang pertanian organik.', 'hari' => "Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu", 'jam_buka' => '07:00', "jam_tutup" => '21:00', 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 7, 'nama_umkm' => 'UMKM Jasa Prima', 'cover' => 'assets/images/umkm/food_7.png', 'deskripsi' => 'UMKM yang menyediakan jasa kebersihan profesional.', 'hari' => "Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu", 'jam_buka' => '07:00', "jam_tutup" => '21:00', 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 8, 'nama_umkm' => 'UMKM Kerajinan Tangan', 'cover' => 'assets/images/umkm/food_5.png', 'deskripsi' => 'UMKM yang memproduksi berbagai macam kerajinan tangan.', 'hari' => "Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu", 'jam_buka' => '07:00', "jam_tutup" => '21:00', 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 9, 'nama_umkm' => 'UMKM Wisata Lestari', 'cover' => 'assets/images/umkm/food_1.png', 'deskripsi' => 'UMKM yang menawarkan paket wisata alam.', 'hari' => "Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu", 'jam_buka' => '07:00', "jam_tutup" => '21:00', 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 10, 'nama_umkm' => 'UMKM Transportasi Aman', 'cover' => 'assets/images/umkm/food_2.png', 'deskripsi' => 'UMKM yang menyediakan layanan transportasi berbasis aplikasi.', 'hari' => "Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu", 'jam_buka' => '07:00', "jam_tutup" => '21:00', 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()]
        ];

        // Insert data UMKM ke database
        UMKMModel::insert($UMKM);
    }
}
