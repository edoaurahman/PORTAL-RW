<?php

namespace Database\Seeders;

use App\Models\SettingHomeModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'gambarstruktur' => 'struktur.png',
            ],
        ];

        foreach ($settings as $setting) {
            SettingHomeModel::create($setting);
        }
    }
}
