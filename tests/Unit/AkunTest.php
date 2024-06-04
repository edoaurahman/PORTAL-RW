<?php

namespace Tests\Unit;

use App\Models\AkunModel;
use App\Models\PendudukModel;
use Tests\TestCase;

class AkunTest extends TestCase
{
    // use WithoutMiddleware;
    /**
     * A basic unit test example.
     */
    public function test_add_akun(): void
    {
        $akun = AkunModel::find(1);
        // ambil penduduk yang akan dijadikan akun, kecuali yang sudah punya akun
        $penduduk = PendudukModel::whereDoesntHave('akun')->limit(30)->get();
        foreach ($penduduk as $p) {
            $response = $this->actingAs($akun)->post('/admin/penduduk/akun/store', [
                'nik' => $p->nik,
                'setAsNik' => true,
                'email' => $p->nik . '@example.com',
            ]);
            $response->assertSessionHasNoErrors();
            $response->assertRedirect('/admin/penduduk/akun');
        }
    }
}
