<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarBeritaModel extends Model
{
    use HasFactory;

    protected $table = 'tb_gambar_berita';
    protected $primaryKey = 'id_gambar_berita';
    protected $fillable = ['image', 'id_berita'];

    public function berita()
    {
        return $this->belongsTo(BeritaModel::class, 'id_berita', 'id_berita');
    }
}
