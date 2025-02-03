<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\livre>
 */
class livreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomlivre' => fake()->unique()->name(),
            'nomauteur' => fake()->unique()->name(),
            'description' => fake()->sentence(),
            'date_pub' => fake()->date(),
            'categorie_id' => Categorie::factory(),
        ];
    }
}
