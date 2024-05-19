<?php

namespace Tests\Unit;

use App\Models\AkunModel;
use Tests\TestCase;

class KeuanganTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_add_keuangan(): void
    {
        $user = AkunModel::find(1);
        $response = $this->actingAs($user)->post('/admin/keuangan/store', [
            'id_kategori' => 1,
            'jumlah' => 20000,
            'nik' => '3522110504040006',
        ]);
        $response = $this->actingAs($user)->post('/admin/keuangan/store', [
            'id_kategori' => 1,
            'jumlah' => 20000,
            'nik' => '3522110504040008',
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
    }

    public function test_setting_keuangan()
    {
        $user = AkunModel::find(1);
        $response = $this->actingAs($user)->post('/admin/keuangan/setting', [
            'interval' => 1,
            'interval_waktu' => 1,
            'minimal_pembayaran' => 20000,
        ]);

        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
    }
}
