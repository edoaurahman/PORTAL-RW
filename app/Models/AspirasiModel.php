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
        'author',
        'isi',
        'status',
        'respon',
    ];

    public function penduduk()
    {
        return $this->belongsTo(PendudukModel::class, 'author', 'nik');
    }

    public function akun()
    {
        return $this->belongsTo(AkunModel::class, 'author', 'nik');
    }

}
