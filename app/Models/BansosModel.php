<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BansosModel extends Model
{
    use HasFactory;

    protected $table = 'tb_bansos';

    protected $primaryKey = 'id_bansos';

    protected $fillable = [
        'no_kk',
        'gaji', // cost
        'jumlah_tanggungan', // benefit
        'luas_tanah', // cost
        'kapasitas_listrik', // cost
        'jumlah_kendaraan', // cost
        'status',
        'alasan'
    ];


    public function kk()
    {
        return $this->belongsTo(KkModel::class, 'no_kk', 'no_kk');
    }

    public function foto_bansos()
    {
        return $this->hasMany(FotoBansosModel::class, 'id_bansos', 'id_bansos');
    }

}
