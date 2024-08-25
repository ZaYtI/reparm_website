<?php

namespace Database\Factories;

use App\Enum\OrderStatus;
use App\Models\Basket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'basket_id' => Basket::factory(),
            'order_price' => fake()->randomFloat(2, 1),
            'status' => fake()->randomElement(OrderStatus::class)
        ];
    }
}
