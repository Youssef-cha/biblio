<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Category;
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
            'nom_livre' => fake()->words(2 ,true),
            'nom_auteur' => fake()->unique()->name(),
            'description' => fake()->sentence(),
            'date_pub' => fake()->date(),
            'categorie_id' => Category::factory(),
        ];
    }
}
