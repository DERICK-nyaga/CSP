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
    protected $model = \App\Models\Parcel::class;
    public function definition(): array
    {
               // \App\Models\Parcels::factory()->create();
        return [
            'companies_id' => fake()->numerify(),
            'branch_id' => fake()->numerify(),
            'sender' => fake()->firstName(),
            'SenderContact' => fake()->numerify(),
            'receipient' => fake()->firstName(),
            'ReceipientContact' => fake()->numerify(),
            'town' => fake()->city(),
            'weight' => fake()->numerify(),
            'PickupStation' => fake()->city(),
            'DeliveryAddress' => fake()->city(),
            'payment' => fake()->lastName(),
            'price' => fake()->numerify(),
        ];
    }
}