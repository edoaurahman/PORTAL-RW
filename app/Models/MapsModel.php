<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapsModel extends Model
{
    use HasFactory;
    protected $table = 'tb_link_maps';
    protected $primaryKey = 'id_link_maps';
    protected $fillable = [
        'nik',
        'link'
    ];

    public function penduduk()
    {
        return $this->belongsTo(PendudukModel::class, 'nik', 'nik');
    }
}
