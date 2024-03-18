<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendudukModel extends Model
{
    use HasFactory;
    protected $table = 'tb_penduduk';
    protected $primaryKey = 'nik';
    protected $fillable = ['nik', 'nama', 'ttl', 'jenis_kelamin', 'agama', 'status_perkawinan', 'pekerjaan', 'gol_darah', 'id_alamat', 'no_kk'];

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
}
