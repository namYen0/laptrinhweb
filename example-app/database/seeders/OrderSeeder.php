<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $users = User::take(10)->get();
        $product = Product::first();

        // THÊM ĐIỀU KIỆN KIỂM TRA
        foreach ($users as $user) {
            $order = Order::create([
                'user_id' => $user->id,
                'total_amount' => $product->price * 2,
                'address' => 'Địa chỉ của user ' . $user->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
