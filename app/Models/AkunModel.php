<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AkunModel extends Authenticatable
{
    use HasFactory;
    protected $table = 'tb_akun';
    protected $primaryKey = 'id_akun';
    protected $fillable = ['email', 'username', 'password', 'id_level', 'nik'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function penduduk(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'nik', 'nik');
    }

    public function level(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'id_level', 'id_level');
    }
}
