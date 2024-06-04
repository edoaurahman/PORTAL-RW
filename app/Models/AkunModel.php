<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AkunModel extends Authenticatable
{
    use Notifiable;
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

    public function umkm(): HasMany
    {
        return $this->HasMany(UMKMModel::class, 'nik', 'nik');
    }

    public function link_maps()
    {
        return $this->hasOne(MapsModel::class, 'nik', 'nik');
    }
}
