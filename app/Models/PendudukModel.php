<?php

namespace App\Models;

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
        'id_alamat'
    ];

    protected $hidden = [
        'password'
    ];
    protected $casts = [
        'ttl' => 'datetime',
        'password' => 'hashed'
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
}
