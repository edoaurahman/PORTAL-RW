<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengeluaranModel extends Model
{
    use HasFactory;
    protected $table = 'tb_pengeluaran';
    protected $primaryKey = 'id_pengeuaran';
    protected $fillable = [
        'id_kategori',
        'keterangan',
        'jumlah',
        'created_at',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriKeuanganModel::class, 'id_kategori', 'id_kategori');
    }
}
