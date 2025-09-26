<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => fake()->numberBetween(1, 100),
            'protein' => fake()->numberBetween(1, 100),
            'carbs' => fake()->numberBetween(1, 100),
            'fat' => fake()->numberBetween(1, 100),
            'sugar' => fake()->numberBetween(1, 100),
            'calories' => fake()->numberBetween(1, 100),
        ];
    }
}
