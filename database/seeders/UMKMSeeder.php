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
        function getRandomNik($nikArray) {
            return $nikArray[array_rand($nikArray)];
        }

        // Data UMKM
        $UMKM = [
            ['id_umkm' => 1, 'nama_umkm' => 'UMKM Sari Rasa', 'deskripsi' => 'UMKM yang bergerak di bidang kuliner tradisional.', 'id_kategori_umkm' => 1, 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 2, 'nama_umkm' => 'UMKM Batik Indah', 'deskripsi' => 'UMKM yang memproduksi batik dengan desain modern.', 'id_kategori_umkm' => 2, 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 3, 'nama_umkm' => 'UMKM Teknologi Jaya', 'deskripsi' => 'UMKM yang fokus pada inovasi teknologi terbaru.', 'id_kategori_umkm' => 3, 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 4, 'nama_umkm' => 'UMKM Sehat Herbal', 'deskripsi' => 'UMKM yang menjual produk-produk kesehatan berbasis herbal.', 'id_kategori_umkm' => 4, 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 5, 'nama_umkm' => 'UMKM Pintar Edu', 'deskripsi' => 'UMKM yang menyediakan layanan pendidikan online.', 'id_kategori_umkm' => 5, 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 6, 'nama_umkm' => 'UMKM Tani Makmur', 'deskripsi' => 'UMKM yang bergerak di bidang pertanian organik.', 'id_kategori_umkm' => 6, 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 7, 'nama_umkm' => 'UMKM Jasa Prima', 'deskripsi' => 'UMKM yang menyediakan jasa kebersihan profesional.', 'id_kategori_umkm' => 7, 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 8, 'nama_umkm' => 'UMKM Kerajinan Tangan', 'deskripsi' => 'UMKM yang memproduksi berbagai macam kerajinan tangan.', 'id_kategori_umkm' => 8, 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 9, 'nama_umkm' => 'UMKM Wisata Lestari', 'deskripsi' => 'UMKM yang menawarkan paket wisata alam.', 'id_kategori_umkm' => 9, 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()],
            ['id_umkm' => 10, 'nama_umkm' => 'UMKM Transportasi Aman', 'deskripsi' => 'UMKM yang menyediakan layanan transportasi berbasis aplikasi.', 'id_kategori_umkm' => 10, 'nik' => getRandomNik($nik), 'created_at' => now(), 'updated_at' => now()]
        ];

        // Insert data UMKM ke database
        UMKMModel::insert($UMKM);
    }
}
