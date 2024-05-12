<?php
use App\Models\AkunModel;
use Illuminate\Http\UploadedFile;

it('can add kepala keluarga', function () {
    $superadmin = AkunModel::find(1);

    $response = $this->actingAs($superadmin)->post('/admin/penduduk', [
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
})->group('admin', 'penduduk');

// can add penduduk to keluarga with no_kk = 0987654321
it('can add penduduk to keluarga', function () {
    $superadmin = AkunModel::find(1);

    $response = $this->actingAs($superadmin)->post('/admin/penduduk', [
        'nik' => '1234567891',
        'nama' => 'Jane Doe',
        'tempat_lahir' => 'Jakarta',
        'tgl_lahir' => '2000-01-01',
        'jenis_kelamin' => 'Perempuan',
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
        'isKepalaKK' => null,
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
})->group('admin', 'penduduk');

// update data penduduk
it('can update penduduk', function () {
    $superadmin = AkunModel::find(1);

    $response = $this->actingAs($superadmin)->put('/admin/penduduk/update', [
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
})->group('admin', 'penduduk');

// show detail penduduk
it('can show detail penduduk', function () {
    $superadmin = AkunModel::find(1);

    $response = $this->actingAs($superadmin)->get('/admin/penduduk/detail/1234567890');

    // check no error
    $response->assertSessionHasNoErrors();
    $response->assertStatus(200);
})->group('admin', 'penduduk');

// 

it('cannot delete kepala keluarga because keluarga more than 1', function () {
    $superadmin = AkunModel::find(1);

    $response = $this->actingAs($superadmin)->delete('/admin/penduduk/1234567890');

    // check error
    $response->assertSessionHasErrors();
    // print error message
    print_r(session('error'));
    $response->assertStatus(302);
    $response->assertRedirect('/admin/penduduk');
})->group('admin', 'penduduk');

// move kepala keluarga to another penduduk
it('can move kepala keluarga to another penduduk', function () {
    $superadmin = AkunModel::find(1);

    $response = $this->actingAs($superadmin)->put('/admin/penduduk/kk/update', [
        'no_kk' => '0987654321',
        'no_kk_prev' => '0987654321',
        'nik_kepalakeluarga' => '1234567891',
    ]);

    // check no error
    $response->assertSessionHasNoErrors();
    $response->assertStatus(302);
    $response->assertRedirect('/admin/penduduk/kk');
})->group('admin', 'penduduk');

// delete penduduk
it('can delete penduduk', function () {
    $superadmin = AkunModel::find(1);

    $response = $this->actingAs($superadmin)->delete('/admin/penduduk/1234567890');

    // check no error
    $response->assertSessionHasNoErrors();
    $response->assertStatus(302);
    $response->assertRedirect('/admin/penduduk');
})->group('admin', 'penduduk');

// delete kepala keluarga
it('can delete kepala keluarga', function () {
    $superadmin = AkunModel::find(1);

    $response = $this->actingAs($superadmin)->delete('/admin/penduduk/1234567891');

    // check no error
    $response->assertSessionHasNoErrors();
    $response->assertStatus(302);
    $response->assertRedirect('/admin/penduduk');
})->group('admin', 'penduduk');

// cannot add penduduk to keluarga with no_kk = 0987654321
it('cannot add penduduk to keluarga', function () {
    $superadmin = AkunModel::find(1);

    $response = $this->actingAs($superadmin)->post('/admin/penduduk', [
        'nik' => '1234567891',
        'nama' => 'Jane Doe',
        'tempat_lahir' => 'Jakarta',
        'tgl_lahir' => '2000-01-01',
        'jenis_kelamin' => 'Perempuan',
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
        'isKepalaKK' => null,
        'image' => UploadedFile::fake()->image('photo1.jpg'),
        'rumah' => [
            UploadedFile::fake()->image('photo2.jpg'),
            UploadedFile::fake()->image('photo3.jpg'),
            UploadedFile::fake()->image('photo4.jpg'),
        ]
    ]);

    // check error
    $response->assertSessionHasErrors();
    $response->assertStatus(302);
    $response->assertRedirect('/admin/penduduk');
})->group('admin', 'penduduk');