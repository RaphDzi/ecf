<?php

namespace Database\Factories;

use App\Models\cour;
use App\Models\creneau;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\creneau>
 */
class CreneauFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'places' => fake()->word(),
            'date_heure' => fake()->sentence(),
            'id_cours' => cour::factory(),
        ];
    }
}
