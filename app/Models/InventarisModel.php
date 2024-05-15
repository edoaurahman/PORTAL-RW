<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarisModel extends Model
{
    use HasFactory;
    protected $table = 'tb_inventaris';
    protected $primaryKey = 'id_inventaris';
    protected $fillable = [
        'nama',
        'jumlah',
        'status',
    ];

    // public function penduduk(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    // {
    //     return $this->belongsTo(PendudukModel::class, 'id_alamat', 'id_alamat');
    // }
}
