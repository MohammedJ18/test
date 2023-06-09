<?php

namespace Database\Seeders;

use App\Models\Advantage;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'jawy', 'price' => 200],
            ['name' => 'jawy1', 'price' => 300],
        ];
        Product::insert($products);
        $products = Product::all();
        $advantages = Advantage::pluck('id')->toArray();
        foreach ($products as $product) {
            $product->advantages()->attach($advantages);
            $product->save();
        }

    }
}
