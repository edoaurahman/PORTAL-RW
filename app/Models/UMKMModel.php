<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKMModel extends Model
{
    use HasFactory;
    protected $table = 'tb_umkm';
    protected $primaryKey = 'id_umkm';
    protected $fillable = [
        'id_umkm',
        'nama_umkm',
        'deskripsi',
    ];

    public function kategori(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(KategoriUMKMModel::class, 'id_kategori', 'id_kategori_umkm');
    }
}
