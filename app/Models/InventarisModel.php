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
        return asset('storage/inventaris/' . $this->image);
    }

}
