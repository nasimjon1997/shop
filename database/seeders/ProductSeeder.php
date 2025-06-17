<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Тестовый товар',
            'category_id' => 1,
            'price' => 100.50,
            'description' => 'Описание тестового товара',
        ]);
    }
}