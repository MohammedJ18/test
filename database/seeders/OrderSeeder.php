<?php

namespace Database\Seeders;

use App\Models\Advantage;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderProductAdvantage;
use App\Models\Product;
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
            'products' => [
                ['id' => 1, 'selected_advantages' => [1, 3, 5]],
                ['id' => 2, 'selected_advantages' => [2, 4, 6]]
            ],
        ];
        $order = Order::create([
            'name' => $orderData['name'],
            'type' => $orderData['type'],
        ]);
        foreach ($orderData['products'] as $product) {
            $orderProduct = OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $product['id'],
            ]);
            foreach ($product['selected_advantages'] as $advantage) {
                OrderProductAdvantage::create([
                    'order_product_id' => $orderProduct->id,
                    'advantage_id' => $advantage,
                ]);
            }
        }
    }
}
