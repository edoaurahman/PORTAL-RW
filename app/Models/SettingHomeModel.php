<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingHomeModel extends Model
{
    use HasFactory;

    protected $table = 'setting_home';
    
    protected $primaryKey = 'id_setting';

    protected $fillable = [
        'gambarstruktur',
    ];

    public function getGambar()
    {
        return asset('assets/images/struktur/' . $this->gambarstruktur);
    }
}
