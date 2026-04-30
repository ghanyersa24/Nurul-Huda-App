<?php

namespace Database\Factories;

use App\Models\Jamaah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Jamaah>
 */
class JamaahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rfid' => fake()->unique()->numerify('RFID########'),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'birth_date' => fake()->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
            'address' => fake()->address(),
        ];
    }
}
