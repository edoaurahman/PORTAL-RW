<?php

namespace Tests\Unit;

use App\Models\AkunModel;
use App\Models\InventarisModel;
use App\Models\PeminjamanModel;
use Tests\TestCase;

class InvertarisTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_pinjam_barang(): void
    {
        $penduduk = AkunModel::all()->random();
        $inventaris = InventarisModel::where('jumlah', '>', 0)->limit(30)->get();
        $response = $this->actingAs($penduduk)->post('/inventaris/pinjam', [
            'id_inventaris' => $inventaris->random()->id_inventaris,
            'jumlah' => 1,
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
        $response->assertRedirect('/inventaris');
    }

    public function test_approve_peminjaman(): void
    {
        $admin = AkunModel::find(1);
        $peminjaman = PeminjamanModel::where('status', 'pending')->first();
        print_r($peminjaman->toArray());
        $response = $this->actingAs($admin)->post('/admin/inventaris/peminjaman/status', [
            'id_peminjaman' => $peminjaman->id_peminjaman,
            'status' => 'approved',
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
        $response->assertRedirect('/admin/inventaris/peminjaman');
    }

    public function test_pinjam_and_approve(): void
    {
        $penduduk = AkunModel::all()->random();
        $inventaris = InventarisModel::where('jumlah', '>', 0)->limit(30)->get();
        $response = $this->actingAs($penduduk)->post('/inventaris/pinjam', [
            'id_inventaris' => $inventaris->random()->id_inventaris,
            'jumlah' => 1,
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
        $response->assertRedirect('/inventaris');

        $admin = AkunModel::find(1);
        $peminjaman = PeminjamanModel::where('status', 'pending')->first();
        print_r($peminjaman->toArray());
        $response = $this->actingAs($admin)->post('/admin/inventaris/peminjaman/status', [
            'id_peminjaman' => $peminjaman->id_peminjaman,
            'status' => 'approved',
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
        $response->assertRedirect('/admin/inventaris/peminjaman');
    }

    public function test_set_peminjaman_done(): void
    {
        $admin = AkunModel::find(1);
        $peminjaman = PeminjamanModel::where('status', 'approved')->first();
        print_r($peminjaman->toArray());
        $response = $this->actingAs($admin)->post('/admin/inventaris/peminjaman/status', [
            'id_peminjaman' => $peminjaman->id_peminjaman,
            'status' => 'done',
        ]);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
        $response->assertRedirect('/admin/inventaris/peminjaman');
    }

    public function test_set_all_peminjaman_done(): void
    {
        $admin = AkunModel::find(1);
        $peminjaman = PeminjamanModel::where('status', 'approved')->get();
        foreach ($peminjaman as $p) {
            $response = $this->actingAs($admin)->post('/admin/inventaris/peminjaman/status', [
                'id_peminjaman' => $p->id_peminjaman,
                'status' => 'done',
            ]);
            $response->assertSessionHasNoErrors();
            $response->assertStatus(302);
            $response->assertRedirect('/admin/inventaris/peminjaman');
        }
    }

    public function test_set_all_peminjaman_approve(): void
    {
        $admin = AkunModel::find(1);
        $peminjaman = PeminjamanModel::where('status', 'pending')->get();
        foreach ($peminjaman as $p) {
            $response = $this->actingAs($admin)->post('/admin/inventaris/peminjaman/status', [
                'id_peminjaman' => $p->id_peminjaman,
                'status' => 'approved',
            ]);
            $response->assertSessionHasNoErrors();
            $response->assertStatus(302);
            $response->assertRedirect('/admin/inventaris/peminjaman');
        }
    }
}
