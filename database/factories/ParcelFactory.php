<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ParcelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sender' => fake()->sender(),
            'SenderContact' => fake()->SenderContact(),
            'receipient' => fake()->receipient(),
            'ReceipientContact' => fake()->ReceipientContact(),
            'town' => fake()->town(),
            'weight' => fake()->weight(),
            'PickupStation' => fake()->PickupStation(),
            'DeliveryAddress' => fake()->DeliveryAddress(),
            'info' => fake()->info(), 
        ];
    }
}