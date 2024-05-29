<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBeritaModel extends Model
{
    use HasFactory;
    protected $table = 'tb_kategori_berita';
    protected $primaryKey = 'id_kategori';
    protected $fillable = ['nama_kategori'];

    public function berita()
    {
        return $this->hasMany(DetailBeritaModel::class, 'id_kategori');
    }
}