<?php

namespace Database\Seeders;

use App\Models\KategoriAspirasiModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriAspirasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'nama_kategori' => 'Usulan Perbaikan Infrastruktur',
                'deskripsi' => 'Aspirasi dari warga terkait dengan perbaikan infrastruktur, seperti permintaan perbaikan jalan rusak, penambahan lampu jalan, atau pembangunan fasilitas umum baru.',
                'created_at' => now(),
            ],
            [
                'nama_kategori' => 'Program Kesejahteraan',
                'deskripsi' => 'Aspirasi untuk memperbaiki atau meningkatkan program kesejahteraan yang ada, seperti permintaan bantuan untuk keluarga yang membutuhkan, atau usulan program pelatihan keterampilan.',
                'created_at' => now(),
            ],
            [
                'nama_kategori' => 'Keamanan Lingkungan',
                'deskripsi' => 'Aspirasi untuk meningkatkan keamanan lingkungan, seperti permintaan peningkatan patroli keamanan, pemasangan kamera pengawas, atau upaya peningkatan kesadaran akan keamanan.',
                'created_at' => now(),
            ],
            [
                'nama_kategori' => 'Partisipasi Masyarakat',
                'deskripsi' => 'Aspirasi untuk meningkatkan partisipasi masyarakat dalam kegiatan RW, seperti ajakan untuk lebih aktif dalam kegiatan gotong royong, mengajukan ide-ide untuk kegiatan sosial, atau usulan untuk memperluas jangkauan program keterampilan.',
                'created_at' => now(),
            ]
        ];

        KategoriAspirasiModel::insert($kategori);
    }
}
