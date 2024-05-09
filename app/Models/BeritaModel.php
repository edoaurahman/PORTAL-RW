<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaModel extends Model
{
    use HasFactory;
    protected $table = 'tb_berita';
    protected $primaryKey = 'id_berita';
    protected $fillable = [
        'judul',
        'gambar',
        'isi',
        'tanggal_posting',
        'author'
    ];

    public function autor()
    {
        return $this->hasOne(PendudukModel::class, 'nik', 'author');
    }

    public function gambar()
    {
        return $this->hasMany(GambarBeritaModel::class, 'id_berita', 'id_berita');
    }
}
