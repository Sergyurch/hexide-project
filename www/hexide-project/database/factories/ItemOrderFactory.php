<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\ItemOrder;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemOrder>
 */
class ItemOrderFactory extends Factory
{
    /**
     * 
     * @var string
     */
    protected $model = ItemOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_id' => Item::get()->random()->id,
            'order_id' => Order::get()->random()->id,
            'quantity' => fake()->numberBetween($min = 1, $max = 10),
        ];
    }
}
