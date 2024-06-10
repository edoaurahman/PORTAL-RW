<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // run all seeder
        $this->call([
            InventarisSeeder::class,
            LevelSeeder::class,
            AlamatSeeder::class,
            KKSeeder::class,
            PendudukSeeder::class,
            AkunSeeder::class,
            KategoriKeuanganSeeder::class,
            KategoriAspirasiSeeder::class,
            BeritaSeeder::class,
            SettingKeuangan::class,
            AgendaSeeder::class,
            KategoriUMKMSeeder::class,
                // UMKMSeeder::class,
            KategoriBeritaSeeder::class,
            DetailBeritaSeeder::class,
            SettingHomeSeeder::class,
        ]);
    }
}
