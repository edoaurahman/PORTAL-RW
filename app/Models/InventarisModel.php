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
        'image',
        'jumlah',
    ];

    public function getImage(): string
    {
        // return asset('storage/inventaris/' . $this->image);
        // cek apakah file gambar ada
        if (file_exists(storage_path('app/public/images/inventaris/' . $this->image))) {
            return asset('storage/images/inventaris/' . $this->image);
        } else {
            return asset('assets/images/illustration/image-not-found.svg');
        }
    }

}
