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
        'nik',
        'jumlah',
        'keterangan',
        'created_at'
    ];
}
