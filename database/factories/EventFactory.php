<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(640, 480, 'events', true),
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'localisation' => $this->faker->address,
            'date' => $this->faker->dateTimeBetween('+1 week', '+1 year'),
            'capacity' => $this->faker->numberBetween(50, 500),
            'categorie_id' => $this->faker->numberBetween(7 , 9), // Assuming you have at least 10 categories
            'organisateur_id' => $this->faker->numberBetween(1,3), // Assuming you have at least 5 organisers
        ];
    }
}