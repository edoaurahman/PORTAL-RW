<?php

namespace Tests\Unit;

use App\Models\AkunModel;
use DirectoryIterator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class UMKMTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_add_umkm(): void
    {
        // get list image from local folder
        $files = [];
        foreach (new DirectoryIterator(__DIR__ . '/umkm_rw') as $file) {
            if ($file->isDot())
                continue;
            $files[] = new UploadedFile(__DIR__ . '/umkm_rw/' . $file, $file);
        }
        // print_r($files);
        $UMKM = [
            [
                'nama_umkm' => 'UMKM Sari Rasa',
                'cover' => $files[rand(0, 9)],
                'isi' => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <html><body><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.413866496143!2d112.6555526871582!3d-7.936416000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62979fa43f443%3A0xfadcb529cc4f2e1!2sIndomaret%20Dipomanggolo%20Araya!5e0!3m2!1sen!2sid!4v1717167908777!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></body></html>
            ',
                'hari' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                'start_time' => '07:00',
                "end_time" => '21:00',
                'list_kategori' => [
                    1,
                    2,
                    3
                ],
                'slide' => [
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                ]
            ],
            [
                'nama_umkm' => 'UMKM Batik Indah',
                'cover' => $files[rand(0, 9)],
                'isi' => 'UMKM yang memproduksi batik dengan desain modern.',
                'hari' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                'start_time' => '07:00',
                "end_time" => '21:00',
                'list_kategori' => [
                    1,
                    2,
                    3
                ],
                'slide' => [
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                ]
            ],
            [
                'nama_umkm' => 'UMKM Teknologi Jaya',
                'cover' => $files[rand(0, 9)],
                'isi' => 'UMKM yang fokus pada inovasi teknologi terbaru.',
                'hari' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                'start_time' => '07:00',
                "end_time" => '21:00',
                'list_kategori' => [
                    1,
                    2,
                    3
                ],
                'slide' => [
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                ]
            ],
            [
                'nama_umkm' => 'UMKM Sehat Herbal',
                'cover' => $files[rand(0, 9)],
                'isi' => 'UMKM yang menjual produk-produk kesehatan berbasis herbal.',
                'hari' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                'start_time' => '07:00',
                "end_time" => '21:00',
                'list_kategori' => [
                    1,
                    2,
                    3
                ],
                'slide' => [
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                ]
            ],
            [
                'nama_umkm' => 'UMKM Pintar Edu',
                'cover' => $files[rand(0, 9)],
                'isi' => 'UMKM yang menyediakan layanan pendidikan online.',
                'hari' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                'start_time' => '07:00',
                "end_time" => '21:00',
                'list_kategori' => [
                    1,
                    2,
                    3
                ],
                'slide' => [
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                ]
            ],
            [
                'nama_umkm' => 'UMKM Tani Makmur',
                'cover' => $files[rand(0, 9)],
                'isi' => 'UMKM yang bergerak di bidang pertanian organik.',
                'hari' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                'start_time' => '07:00',
                "end_time" => '21:00',
                'list_kategori' => [
                    1,
                    2,
                    3
                ],
                'slide' => [
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                ]
            ],
            [
                'nama_umkm' => 'UMKM Jasa Prima',
                'cover' => $files[rand(0, 9)],
                'isi' => 'UMKM yang menyediakan jasa kebersihan profesional.',
                'hari' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                'start_time' => '07:00',
                "end_time" => '21:00',
                'list_kategori' => [
                    1,
                    2,
                    3
                ],
                'slide' => [
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                ]
            ],
            [
                'nama_umkm' => 'UMKM Kerajinan Tangan',
                'cover' => $files[rand(0, 9)],
                'isi' => 'UMKM yang memproduksi berbagai macam kerajinan tangan.',
                'hari' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                'start_time' => '07:00',
                "end_time" => '21:00',
                'list_kategori' => [
                    1,
                    2,
                    3
                ],
                'slide' => [
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                ]
            ],
            [
                'nama_umkm' => 'UMKM Wisata Lestari',
                'cover' => $files[rand(0, 9)],
                'isi' => 'UMKM yang menawarkan paket wisata alam.',
                'hari' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                'start_time' => '07:00',
                "end_time" => '21:00',
                'list_kategori' => [
                    1,
                    2,
                    3
                ],
                'slide' => [
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                ]
            ],
            [
                'nama_umkm' => 'UMKM Transportasi Aman',
                'cover' => $files[rand(0, 9)],
                'isi' => 'UMKM yang menyediakan layanan transportasi berbasis aplikasi.',
                'hari' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                'start_time' => '07:00',
                "end_time" => '21:00',
                'list_kategori' => [
                    1,
                    2,
                    3
                ],
                'slide' => [
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                    $files[rand(0, 9)],
                ]
            ]
        ];

        $akun = AkunModel::all();
        $response = $this->actingAs($akun->random())->post('/umkm/store', $UMKM[rand(0, 9)]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
    }
}
