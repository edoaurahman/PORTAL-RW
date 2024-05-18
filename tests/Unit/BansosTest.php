<?php

namespace Tests\Unit;

use App\Models\AkunModel;
use App\Models\KkModel;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class BansosTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_add_bansos(): void
    {
        $user = AkunModel::find(1);
        $response = $this->actingAs($user)->post('/admin/bansos/store', [
            'no_kk' => '0987654321',
            'gaji' => '3',
            'jumlah_tanggungan' => '5',
            'luas_tanah' => '2',
            'kapasitas_listrik' => '2',
            'jumlah_kendaraan' => '2',

            'images' => [
                UploadedFile::fake()->image('foto1.jpg'),
                UploadedFile::fake()->image('foto2.jpg'),
                UploadedFile::fake()->image('foto3.jpg'),
            ],
        ]);

        $response->assertSessionHasNoErrors();
        $response->assertRedirect('/admin/bansos');
    }


    public function test_delete_foto_bansos(): void
    {
        $user = AkunModel::find(1);
        $response = $this->actingAs($user)->delete('/admin/bansos/foto', [
            'id' => 1,
        ]);
        $response->assertSessionHasNoErrors();
    }

    public function test_update_bansos()
    {
        $user = AkunModel::find(1);
        $response = $this->actingAs($user)->put('/admin/bansos/update/1', [
            'no_kk' => '0987654321',
            'gaji' => '3',
            'jumlah_tanggungan' => '5',
            'luas_tanah' => '2',
            'kapasitas_listrik' => '3',
            'jumlah_kendaraan' => '4',

            'images' => [
                UploadedFile::fake()->image('foto1.jpg'),
                UploadedFile::fake()->image('foto2.jpg'),
                UploadedFile::fake()->image('foto3.jpg'),
            ],
        ]);

        $response->assertSessionHasNoErrors();
        $response->assertRedirect('/admin/bansos');
    }

    public function test_delete_bansos()
    {
        $user = AkunModel::find(1);
        $response = $this->actingAs($user)->delete('/admin/bansos', [
            'id' => 1,
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
    }

    public function test_approve_bansos()
    {
        $user = AkunModel::find(1);
        $response = $this->actingAs($user)->put('/admin/bansos/status', [
            'id' => 1,
            'status' => 'approved',
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
    }

    public function test_reject_bansos()
    {
        $user = AkunModel::find(1);
        $response = $this->actingAs($user)->put('/admin/bansos/status', [
            'id' => 1,
            'status' => 'rejected',
            'alasan' => 'tidak sesuai, yang bener aja rugi dong',
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
    }

    public function test_add_all_bansos(): void
    {
        $user = AkunModel::find(1);

        $kk = KkModel::all();

        foreach ($kk as $item) {
            $response = $this->actingAs($user)->post('/admin/bansos/store', [
                'no_kk' => $item->no_kk,
                'gaji' => rand(1, 5),
                'jumlah_tanggungan' => rand(1, 5),
                'luas_tanah' => rand(1, 5),
                'kapasitas_listrik' => rand(1, 5),
                'jumlah_kendaraan' => rand(1, 5),

                'images' => [
                    UploadedFile::fake()->image('foto1.jpg'),
                    UploadedFile::fake()->image('foto2.jpg'),
                    UploadedFile::fake()->image('foto3.jpg'),
                ],
            ]);

            $response->assertSessionHasNoErrors();
            $response->assertRedirect('/admin/bansos');
        }
    }
}
