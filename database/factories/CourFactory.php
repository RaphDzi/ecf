<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\cour;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cour>
 */
class CourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->word(),
            'description' => fake()->sentence(),
        ];
    }
}
