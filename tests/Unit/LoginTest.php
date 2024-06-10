<?php

namespace Tests\Unit;

use App\Models\AkunModel;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_login_success_with_penduduk_account(): void
    {
        $response = $this->post('/login', [
            'username' => 'user',
            'password' => 'user',
            'page' => 'penduduk'
        ]);

        $response->assertRedirect('/home');
    }
    public function test_login_success_with_admin_account(): void
    {
        $response = $this->post('/login', [
            'username' => 'superadmin',
            'password' => 'superadmin',
            'page' => 'admin'
        ]);

        $response->assertRedirect('/admin');
    }
    public function test_halaman_login(): void
    {
        $response = $this->get('/login');

        $response->assertViewIs('components.view.login');
    }
    public function test_redirect_to_dasboard_after_access_login_with_admin_account(): void
    {
        $user = AkunModel::find(1);
        // dd($user->toArray());
        $response = $this->actingAs($user)->get('/login');
        $response->assertRedirect('/admin/dashboard');
    }
    public function test_page_home(): void
    {
        $response = $this->get('/home');
        $response->assertSuccessful();
        $response->assertViewIs('user.home');
    }

    public function test_page_admin_with_guest(): void
    {
        $response = $this->get('/admin');

        $response->assertRedirect('/login');
    }
}
