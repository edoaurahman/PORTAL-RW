<?php

namespace Database\Seeders;

use App\Models\SettingKeuanganModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingKeuangan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'nama_setting' => 'Pemasukan',
                'nilai_setting' => '20000',
                'keterangan' => 'Iuran Bulanan',
                'status' => 'active',
                'created_by' => '3522110504040001',
                'updated_by' => '3522110504040001',
            ],
            [
                'nama_setting' => 'Interval',
                'nilai_setting' => '1',
                'keterangan' => 'Pemasukan setiap minggu,bulan,tahun',
                'status' => 'active',
                'created_by' => '3522110504040001',
                'updated_by' => '3522110504040001',
            ],
            [
                'nama_setting' => 'Interval Waktu',
                'nilai_setting' => '1',
                'keterangan' => 'n = Minggu/Bulan/Tahun',
                'status' => 'active',
                'created_by' => '3522110504040001',
                'updated_by' => '3522110504040001',
            ],
        ];

        foreach ($settings as $setting) {
            SettingKeuanganModel::create($setting);
        }
    }
}
