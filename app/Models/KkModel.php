<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KkModel extends Model
{
    use HasFactory;
    protected $table = 'tb_kk';
    protected $primaryKey = 'no_kk';
    protected $fillable = [
        'no_kk',
        'nik_kepalakeluarga',
    ];

    public function penduduk()
    {
        return $this->hasMany(PendudukModel::class, 'no_kk', 'no_kk');
    }

    public function pendudukHasOne()
    {
        return $this->hasOne(PendudukModel::class, 'nik', 'nik_kepalakeluarga');
    }
}
