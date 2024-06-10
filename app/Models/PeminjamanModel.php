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
    public function inventaris()
    {
        return $this->belongsTo(InventarisModel::class, 'id_inventaris', 'id_inventaris');
    }

    public function penduduk()
    {
        return $this->belongsTo(PendudukModel::class, 'nik', 'nik');
    }
}
