<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class UMKMModel extends Model
{
    use HasFactory;
    protected $table = 'tb_umkm';
    protected $primaryKey = 'id_umkm';
    protected $fillable = [
        'id_umkm',
        'nama_umkm',
        'deskripsi',
        'cover',
        'hari',
        'jam_buka',
        'jam_tutup',
        'id_kategori_umkm',
        'nik',
    ];

    public function kategori(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(KategoriUMKMModel::class, 'id_kategori', 'id_kategori_umkm');
    }
    public function penduduk(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(PendudukModel::class, 'nik', 'nik');
    }
    public function gambar(): HasMany
    {
        return $this->hasMany(GambarUMKMModel::class, 'id_umkm', 'id_umkm');
    }

    public function generateCuplikan()
    {
        $dom = new \DOMDocument();
        $dom->loadHTML($this->deskripsi);
        $cuplikan = strip_tags($dom->textContent);
        return Str::limit($cuplikan, 50);
    }
    public function getCover(): string
    {
        if (file_exists(storage_path('app/public/images/umkm/cover_umkm/' . $this->cover))) {
            return asset('storage/images/umkm/cover_umkm/' . $this->cover);
        } else {
            return asset('assets/images/illustration/image-not-found.svg');
        }
    }

    public function tokoBuka(): bool
    {
        $jamSekarang = date('H:i:s');
        $hari = mb_split(',', $this->hari);
        // get day name in local ID
        $hariSekarang = Carbon::now()->locale('id')->dayName;
        if (!in_array($hariSekarang, $hari)) {
            return false;
        }
        if (($jamSekarang >= $this->jam_buka && $jamSekarang <= $this->jam_tutup)) {
            return true;
        } else {
            return false;
        }
    }
}
