<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoBansosModel extends Model
{
    use HasFactory;

    protected $table = 'tb_foto_bansos';

    protected $primaryKey = 'id_foto_bansos';

    protected $fillable = [
        'id_foto_bansos',
        'id_bansos',
        'image'
    ];

    public function bansos()
    {
        return $this->belongsTo(BansosModel::class, 'id_bansos', 'id_bansos');
    }

    // protected function foto_rumah(): Attribute
    // {
    //     // return asset('storage/images/foto_bansos/' . $this->image);
    //     return Attribute::make(get: fn($image) => asset('storage/images/foto_bansos/' . $this->image));
    // }

    protected function fotoRumah(): Attribute
    {
        return Attribute::make(get: fn($gambar) => asset('storage/images/foto_bansos/' . $this->image));
    }
}
