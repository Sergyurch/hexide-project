<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * 
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->words($nb = 3, $asText = true),
            'description' => fake()->text(),
            'image_path' => fake()->imageUrl(),
            'price' => fake()->randomFloat($nbMaxDecimals = 2, $min = 0.01, $max = 100000),
        ];
    }
}
