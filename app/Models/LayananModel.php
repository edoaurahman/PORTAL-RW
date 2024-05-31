<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananModel extends Model
{
    use HasFactory;
    protected $table = 'tb_surat';
    protected $primaryKey = 'id_surat';
    protected $fillable = [
        'nama_surat',
        'image',
        'keterangan',
        'file',
        'author',
    ];

    public function getImage(): string
    {
        if (file_exists(storage_path('app/public/images/layanan/' . $this->image))) {
            return asset('storage/images/layanan/' . $this->image);
        } else {
            return asset('assets/images/illustration/image-not-found.svg');
        }
    }
    public function downloadSurat(): string
    {
        return asset('storage/layanan/berkas/' . $this->file);
    }

}
