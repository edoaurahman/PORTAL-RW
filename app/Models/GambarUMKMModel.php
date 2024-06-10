<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarUMKMModel extends Model
{
    use HasFactory;
    protected $table = 'tb_gambar_umkm';
    protected $primaryKey = 'id_gambar_umkm';
    protected $fillable = [
        'id_gambar_umkm',
        'gambar',
        'position',
        'id_umkm',
    ];

    public function umkm()
    {
        return $this->belongsTo(UMKMModel::class, 'id_umkm', 'id_umkm');
    }

    public function getSlideUMKM(): string
    {
        if (file_exists(storage_path('app/public/images/umkm/slide_umkm/' . $this->gambar))) {
            return asset('storage/images/umkm/slide_umkm/' . $this->gambar);
        } else {
            return asset('assets/images/illustration/image-not-found.svg');
        }
    }
}
