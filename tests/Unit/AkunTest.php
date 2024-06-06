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

    public function test_create_akun_rt(): void
    {
        $listRt = AkunModel::with('penduduk.alamat')
            ->whereHas('level', function ($q) {
                $q->where('nama_level', 'RT');
            })
            ->get();

        $rtArray = $listRt->map(function ($akun) {
            return $akun->penduduk->alamat->rt;
        })->toArray();

        $akunPendudukNotInRtArray = AkunModel::with('penduduk.alamat')
            ->whereHas('penduduk.alamat', function ($query) use ($rtArray) {
                $query->whereNotIn('rt', $rtArray);
            })
            ->whereHas('level', function ($q) {
                $q->where('nama_level', 'Penduduk');
            })
            ->get();

        $admin = AkunModel::find(1);
        $response = $this->actingAs($admin)->post('/admin/level', [
            'nik' => $akunPendudukNotInRtArray->first()->nik,
            'level' => 2,
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect('/admin/level');

    }
}
