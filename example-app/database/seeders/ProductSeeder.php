<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Product 1',
            'image' => 'product1.jpg',
            'price' => 100.00,
            'quantity' => 10,
            'description' => 'Description for product 1'
        ]);

        Product::create([
            'name' => 'Product 2',
            'image' => 'product2.jpg',
            'price' => 200.00,
            'quantity' => 5,
            'description' => 'Description for product 2'
        ]);
    }
}
