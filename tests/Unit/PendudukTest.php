<?php

namespace Tests\Unit;

use App\Models\AkunModel;
use App\Models\PendudukModel;
use DirectoryIterator;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class PendudukTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_update_foto_penduduk(): void
    {
        // $files = [];
        foreach (new DirectoryIterator(__DIR__ . '/profile') as $file) {
            if ($file->isDot())
                continue;
            $files[] = new UploadedFile(__DIR__ . '/profile/' . $file, $file);
        }

        $admin = AkunModel::find(1);
        $penduduk = PendudukModel::with('alamat')->get();
        foreach ($penduduk as $value) {
            $response = $this->actingAs($admin)->put('/admin/penduduk/update', [
                "no_kk" => $value->no_kk,
                "nik" => $value->nik,
                "nama" => $value->nama,
                "tempat_lahir" => $value->tempat_lahir,
                "tgl_lahir" => $value->tgl_lahir,
                "jenis_kelamin" => $value->jenis_kelamin,
                "agama" => $value->agama,
                "status_perkawinan" => $value->status_perkawinan,
                "pekerjaan" => $value->pekerjaan,
                "gol_darah" => $value->gol_darah,
                "status_penduduk" => $value->status_penduduk,
                "kel" => $value->alamat->kel,
                "kecamatan" => $value->alamat->kecamatan,
                "jalan" => $value->alamat->jalan,
                "rt" => $value->alamat->rt,
                "rw" => $value->alamat->rw,
                "no_hp" => $value->alamat->no_hp,
                "image" => $files[rand(0, count($files) - 1)],
            ]);
            $response->assertSessionHasNoErrors();
            $response->assertStatus(302);
            $response->assertRedirect('/admin/penduduk');
        }
    }
}
