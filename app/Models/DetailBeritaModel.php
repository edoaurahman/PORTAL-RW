<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBeritaModel extends Model
{
    use HasFactory;
    protected $table = 'tb_detail_berita';
    protected $primaryKey = 'id_detail';
    protected $fillable = ['id_berita', 'id_kategori'];

    public function berita()
    {
        return $this->belongsTo(BeritaModel::class, 'id_berita', 'id_berita');
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriBeritaModel::class, 'id_kategori', 'id_kategori');
    }
}
