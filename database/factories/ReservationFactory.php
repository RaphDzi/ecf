<?php

namespace Database\Factories;

use App\Models\creneau;
use App\Models\User;
use App\Models\reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\reservation>
 */
class ReservationFactory extends Factory
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
            'date_reservation' => fake()->sentence(),
            'id_utilisateur' => User::factory(),
            'id_creneau' => creneau::factory(),
        ];
    }
}
