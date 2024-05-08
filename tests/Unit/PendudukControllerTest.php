<?php

namespace Tests\Unit;

use App\Models\AkunModel;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class PendudukControllerTest extends TestCase
{
    public function test_add_kepala_keluarga(): void
    {
        $user = AkunModel::find(1);

        $response = $this->actingAs($user)->post('/admin/penduduk', [
            'nik' => '1234567890',
            'nama' => 'John Doe',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2000-01-01',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'status_perkawinan' => 'Belum Kawin',
            'pekerjaan' => 'PNS',
            'gol_darah' => 'A',
            'no_kk' => '0987654321',
            'status_penduduk' => 'Penduduk Tetap',
            'no_hp' => '081234567890',
            'kel' => 'Lorem',
            'kecamatan' => 'Ipsum',
            'jalan' => 'Dolor',
            'rt' => '1',
            'rw' => '2',
            'isKepalaKK' => 'true',
            'image' => UploadedFile::fake()->image('photo1.jpg'),
            'rumah' => [
                UploadedFile::fake()->image('photo2.jpg'),
                UploadedFile::fake()->image('photo3.jpg'),
                UploadedFile::fake()->image('photo4.jpg'),
            ]
        ]);
        // check no error
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
        $response->assertRedirect('/admin/penduduk');
    }
}
