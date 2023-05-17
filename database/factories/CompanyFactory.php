<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CompanyName' => fake()->CompanyName(),
            'description' => fake()->description(),
            'address' => fake()->address(),
            'pricing' => fake()->prices(),
        ];
    }
}