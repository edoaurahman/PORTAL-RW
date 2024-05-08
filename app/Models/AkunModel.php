<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AkunModel extends Authenticatable
{
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

    public function penduduk(): BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'nik', 'nik');
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'id_level', 'id_level');
    }
}
