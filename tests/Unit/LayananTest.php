<?php

namespace Tests\Unit;

use App\Models\AkunModel;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class LayananTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_menambah_layanan(): void
    {
        $user = AkunModel::find(1);
        $response = $this->actingAs($user)->post('/admin/layanan/store', [
            'nama_surat' => 'Surat Keterangan',
            'image' => UploadedFile::fake()->image('surat-keterangan.jpg'),
            'keterangan' => 'Surat keterangan untuk keperluan tertentu',
            'file' => UploadedFile::fake()->create('surat-keterangan.docx'),
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);

    }
}
