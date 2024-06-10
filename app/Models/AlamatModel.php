<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatModel extends Model
{
    use HasFactory;
    protected $table = 'tb_alamat';
    protected $primaryKey = 'id_alamat';
    protected $fillable = [
        'rw',
        'rt',
        'kel',
        'kecamatan',
        'jalan'
    ];

    public function penduduk(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'id_alamat', 'id_alamat');
    }
}
