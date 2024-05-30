<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarUMKMModel extends Model
{
    use HasFactory;
    protected $table = 'tb_gambar_UMKM';
    protected $primaryKey = 'id_gambar_UMKM';
    protected $fillable = [
        'id_gambar_umkm',
        'gambar',
        'id_umkm',
    ];

    public function umkm()
    {
        return $this->belongsTo(UMKMModel::class, 'id_umkm', 'id_umkm');
    }
}
