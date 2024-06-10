<?php

namespace Database\Factories;

use App\Models\AkunModel;
use App\Models\InventarisModel;
use App\Models\PeminjamanModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PeminjamanModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PeminjamanModel::class;
    public function definition(): array
    {
        $date = $this->faker->dateTimeBetween('2019-01-01', '2024-12-31', 'Asia/Jakarta');
        return [
            'id_inventaris' => InventarisModel::all()->random()->id_inventaris,
            'jumlah' => $this->faker->numberBetween(1, 5),
            'nik' => AkunModel::all()->random()->nik,
            'status' => 'done',
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }

    protected static function newFactory(): Factory
    {
        return PeminjamanModelFactory::new();
    }
}
