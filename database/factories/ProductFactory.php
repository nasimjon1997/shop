<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = \App\Models\Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true), // Генерирует название из двух слов
            'category_id' => Category::inRandomOrder()->first()->id, // Случайная категория из существующих
            'description' => $this->faker->optional()->sentence(10), // Случайное описание (иногда null)
            'price' => $this->faker->randomFloat(2, 10, 1000), // Цена от 10.00 до 1000.00 рублей
        ];
    }
}