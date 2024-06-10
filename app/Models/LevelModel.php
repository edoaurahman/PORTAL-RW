<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;
    protected $table = 'tb_level';
    protected $primaryKey = 'id_level';
    protected $fillable = ['id_level', 'nama_level'];

    public function akun()
    {
        return $this->hasMany(AkunModel::class, 'id_level', 'id_level');
    }
}
