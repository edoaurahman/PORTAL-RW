<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaModel extends Model
{
    use HasFactory;
    protected $table = 'tb_agenda';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'deskripsi',
        'start',
        'end',
        'author',
    ];

    public function penduduk(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PendudukModel::class, 'author', 'nik');
    }
}
