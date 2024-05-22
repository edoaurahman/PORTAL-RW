<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanModel extends Model
{
    use HasFactory;
    protected $table = 'tb_peminjaman';
    protected $primaryKey = 'id_peminjaman';
    protected $fillable = [
        'id_inventaris',
        'jumlah',
        'nik',
        'status'
    ];

}
