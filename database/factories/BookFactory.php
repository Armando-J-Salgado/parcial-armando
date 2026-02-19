<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $totales = fake()->numberBetween(1,10);
        return [
            'titulo'=>fake()->text(),
            'descripcion'=>fake()->text(),
            'ISBN'=>fake()->unique()->numerify('#############'),
            'copias_totales'=>$totales,
            'copias_disponibles'=>fake()->numberBetween(1, $totales),
            'disponible'=>fake()->numberBetween(0,1),
        ];
    }
}
