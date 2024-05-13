<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendudukModel extends Model
{
    use HasFactory;
    protected $table = 'tb_penduduk';
    protected $primaryKey = 'nik';
    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'agama',
        'status_perkawinan',
        'pekerjaan',
        'gol_darah',
        'no_kk',
        'status_penduduk',
        'no_hp',
        'id_alamat',
        'image'
    ];

    protected $casts = [
        'ttl' => 'datetime',
    ];

    public function akun(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(AkunModel::class, 'nik', 'nik');
    }

    public function alamat(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(AlamatModel::class, 'id_alamat', 'id_alamat');
    }

    public function kk()
    {
        return $this->belongsTo(KkModel::class, 'no_kk', 'no_kk');
    }

    protected function foto_profil(): Attribute
    {
        return Attribute::make(get: fn($gambar) => asset('storage/images/penduduk/' . $this->image));
    }

    public function berita()
    {
        return $this->hasMany(BeritaModel::class, 'author', 'nik');
    }
}
