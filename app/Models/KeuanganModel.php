<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeuanganModel extends Model
{
    use HasFactory;

    protected $table = 'tb_keuangan';
    protected $primaryKey = 'id_keuangan';
    protected $fillable = [
        'id_kategori',
        'no_kk',
        'jumlah',
        'keterangan',
        'created_at'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriKeuanganModel::class, 'id_kategori', 'id_kategori');
    }

    public function kk()
    {
        return $this->belongsTo(KkModel::class, 'no_kk', 'no_kk');
    }
}
