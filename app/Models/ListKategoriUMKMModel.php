<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListKategoriUMKMModel extends Model
{
    use HasFactory;
    protected $table = 'tb_list_kategori_umkm';
    protected $primaryKey = 'id_list_kategori_umkm';
    protected $fillable = [
        'kategori',
        'id_umkm',
    ];

    public function umkm()
    {
        return $this->belongsTo(UMKMModel::class, 'id_umkm', 'id_umkm');
    }
}
