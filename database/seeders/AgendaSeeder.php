<?php

namespace Database\Seeders;

use App\Models\AgendaModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agenda = [
            [
                'title' => 'Rapat RT 01',
                'deskripsi' => 'Rapat RT 01',
                'start' => now()->format('Y-m-d'),
                'end' => now()->addDay()->format('Y-m-d'),
                'author' => '3522110504040006'
            ],
            [
                'title' => 'Rapat RT 02',
                'deskripsi' => 'Rapat RT 02',
                'start' => now()->addDay()->format('Y-m-d'),
                'end' => now()->addDay(2)->format('Y-m-d'),
                'author' => '3522110504040006'
            ],
            [
                'title' => 'Rapat RT 03',
                'deskripsi' => 'Rapat RT 03',
                'start' => now()->addDay(2)->format('Y-m-d'),
                'end' => now()->addDay(3)->format('Y-m-d'),
                'author' => '3522110504040006'
            ],
            [
                'title' => 'Rapat RT 04',
                'deskripsi' => 'Rapat RT 04',
                'start' => now()->addDay(3)->format('Y-m-d'),
                'end' => now()->addDay(4)->format('Y-m-d'),
                'author' => '3522110504040006'
            ],
            [
                'title' => 'Rapat RT 05',
                'deskripsi' => 'Rapat RT 05',
                'start' => now()->addDay(4)->format('Y-m-d'),
                'end' => now()->addDay(5)->format('Y-m-d'),
                'author' => '3522110504040006'
            ],
        ];

        foreach ($agenda as $a) {
            AgendaModel::create($a);
        }
    }
}
