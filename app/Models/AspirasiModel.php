<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AspirasiModel extends Model
{
    use HasFactory;
    protected $table = 'tb_aspirasi';
    protected $primaryKey = 'id_aspirasi';
    protected $fillable = [
        'judul',
        'author',
        'isi',
        'dokumentasi',
        'status',
        'respon',
        'id_kategori'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriAspirasiModel::class, 'id_kategori', 'id_kategori');
    }
}
