<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        $products = [
            [
                'name' => 'Product 1',
                'short_description' => 'Short description for product 1',
                'description' => 'Description for product 1',
                'price' => 10000
            ],
            [
                'name' => 'Product 2',
                'short_description' => 'Short description for product 2',
                'description' => 'Description for product 2',
                'price' => 20000
            ],
            [
                'name' => 'Product 3',
                'short_description' => 'Short description for product 3',
                'description' => 'Description for product 3',
                'price' => 30000
            ]
        ];

        foreach ($products as $product){
            Product::create($product);
        }


    }
}
