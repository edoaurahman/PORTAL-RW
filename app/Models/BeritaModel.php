<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;

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

    public function penulis()
    {
        return $this->belongsTo(PendudukModel::class, 'author', 'nik');
    }

    public function gambar_berita()
    {
        return $this->hasMany(GambarBeritaModel::class, 'id_berita', 'id_berita');
    }

    public function generateCuplikan()
    {
        $dom = new \DOMDocument();
        $dom->loadHTML($this->isi);
        $cuplikan = strip_tags($dom->textContent);
        return Str::limit($cuplikan, 150);
    }

    protected function sampul(): Attribute
    {
        return Attribute::make(get: fn($gambar) => asset('storage/images/berita/' . $this->gambar));
    }
}
