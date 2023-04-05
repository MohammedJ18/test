<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderData = [
            'name' => 'hussam',
            'type' => 1,
            'products' => [1, 2],
        ];
        
        $order = Order::create([
            'name' => $orderData['name'],
            'type' => $orderData['type'],
        ]);
        
        $order->products()->attach($orderData['products']);        
    }
}
