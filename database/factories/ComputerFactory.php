<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Computer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Computer::class;

    public function definition(): array
    {
        return [
            'serial' => $this->faker->unique()->numberBetween(1000000,9999999),
            'marca' => $this->faker->randomElement(['DELL', 'LENOVO', 'HP', 'MSI']),
            'modelo' => $this->faker->randomElement(['ThinkPad', 'IdeaPad', 'Slim', 'Chunk']),
            'año' => $this->faker->year(),
            'tipo' => $this->faker->randomElement(['Laptop', 'PC']),
        ];
    }
}
