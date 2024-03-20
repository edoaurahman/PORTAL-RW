<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAspirasiModel extends Model
{
    use HasFactory;
    protected $table = 'tb_kategori_aspirasi';
    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'nama_kategori',
        'deskripsi'
    ];

    public function aspirasi()
    {
        return $this->hasMany(AspirasiModel::class, 'id_kategori', 'id_kategori');
    }
}
