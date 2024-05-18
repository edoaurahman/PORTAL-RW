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
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
    }
}
