<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingKeuanganModel extends Model
{
    use HasFactory;
    // id_setting_keuangan	nama_setting	nilai_setting	keterangan	status	created_by	updated_by	created_at	updated_at	
    protected $table = 'setting_keuangan';
    protected $primaryKey = 'id_setting_keuangan';
    protected $fillable = [
        'nama_setting',
        'nilai_setting',
        'keterangan',
        'status',
        'created_by',
        'updated_by'
    ];
}
