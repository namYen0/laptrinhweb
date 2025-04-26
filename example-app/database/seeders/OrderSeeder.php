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
        $user = User::first();
        $product = Product::first();

        // THÊM ĐIỀU KIỆN KIỂM TRA
        if ($user && $product) {
            $order = Order::create([
                'user_id' => $user->id,
                'total_amount' => $product->price * 2,
                'address' => '123 Street ABC',
            ]);

            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => 2,
            ]);
        } else {
            echo "\n❗ Không có user hoặc product để tạo order!\n";
        }
    }
}
