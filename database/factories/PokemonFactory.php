<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemon>
 */
class PokemonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'height' => $this->faker->randomFloat(2, 1, 2),
            'weight' => $this->faker->randomFloat(2, 1, 300),
            'hp' => $this->faker->numberBetween(1, 100),
            'image' => "https://picsum.photos/400/200"
        ];
    }
}
