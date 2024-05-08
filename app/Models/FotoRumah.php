<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoRumah extends Model
{
    use HasFactory;

    protected $table = 'tb_foto_rumah';
    protected $primaryKey = 'id_foto_rumah';
    protected $fillable = [
        'no_kk',
        'image'
    ];

    public function kk()
    {
        return $this->belongsTo(KkModel::class, 'no_kk', 'no_kk');
    }
}
