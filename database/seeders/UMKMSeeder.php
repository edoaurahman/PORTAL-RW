<?php

namespace Database\Seeders;

use App\Models\ListKategoriUMKMModel;
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
            [
                'id_umkm' => 1,
                'nama_umkm' => 'UMKM Sari Rasa',
                'cover' => 'assets/images/umkm/food_1.png',
                'deskripsi' => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <html><body><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.413866496143!2d112.6555526871582!3d-7.936416000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62979fa43f443%3A0xfadcb529cc4f2e1!2sIndomaret%20Dipomanggolo%20Araya!5e0!3m2!1sen!2sid!4v1717167908777!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></body></html>
            ',
                'hari' => "Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu",
                'jam_buka' => '07:00',
                "jam_tutup" => '21:00',
                'nik' => getRandomNik($nik),
                'created_at' => now(),
                'updated_at' => now()
            ],
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

        $listKategori = [
            ['id_kategori' => 1, 'id_umkm' => 1],
            ['id_kategori' => 2, 'id_umkm' => 2],
            ['id_kategori' => 3, 'id_umkm' => 3],
            ['id_kategori' => 4, 'id_umkm' => 4],
            ['id_kategori' => 5, 'id_umkm' => 5],
            ['id_kategori' => 6, 'id_umkm' => 6],
            ['id_kategori' => 7, 'id_umkm' => 7],
            ['id_kategori' => 8, 'id_umkm' => 8],
            ['id_kategori' => 9, 'id_umkm' => 9],
            ['id_kategori' => 10, 'id_umkm' => 10],
            ['id_kategori' => 1, 'id_umkm' => 4],
        ];
        ListKategoriUMKMModel::insert($listKategori);
    }
}
