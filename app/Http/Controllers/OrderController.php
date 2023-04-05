<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderProductAdvantage;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::with('products')->find(1);
        $order->products->each(function ($product) {
            $orderProductIdsForThisProduct = OrderProduct::where('product_id', $product->id)->pluck('id');
            $orderProductAdvantagesIds = OrderProductAdvantage::whereIn('order_product_id', $orderProductIdsForThisProduct)->pluck('advantage_id');
            $product->advantages = Advantage::whereIn('id', $orderProductAdvantagesIds)->get();
        });
        return response()->json($order);
    }
}
