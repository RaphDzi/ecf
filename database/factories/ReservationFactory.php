<?php

namespace Database\Factories;

use App\Models\Creneau;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
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
            'date_reservation' => fake()->date(),
            'utilisateur_id' => Utilisateur::factory(),
            'creneau_id' => Creneau::factory(),
        ];
    }
}
