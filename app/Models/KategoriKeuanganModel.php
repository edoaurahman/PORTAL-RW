<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKeuanganModel extends Model
{
    use HasFactory;

    protected $table = 'tb_kategori_keuangan';

    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'nama_kategori',
        'keterangan'
    ];

    public function keuangan()
    {
        return $this->hasMany(KeuanganModel::class, 'id_kategori', 'id_kategori');
    }
}
