<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UMKMModel extends Model
{
    use HasFactory;
    protected $table = 'tb_umkm';
    protected $primaryKey = 'id_umkm';
    protected $fillable = [
        'id_umkm',
        'nama_umkm',
        'deskripsi',
        'cover',
        'hari',
        'jam_buka',
        'jam_tutup',
        'id_kategori_umkm',
        'nik',
    ];

    public function kategori(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(KategoriUMKMModel::class, 'id_kategori', 'id_kategori_umkm');
    }
    public function nik(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(PendudukModel::class, 'nik', 'nik');
    }
    public function generateCuplikan()
    {
        $dom = new \DOMDocument();
        $dom->loadHTML($this->deskripsi);
        $cuplikan = strip_tags($dom->textContent);
        return Str::limit($cuplikan, 50);
    }
}
