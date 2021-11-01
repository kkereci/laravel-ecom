<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
Use App\Models\Image;
Use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Payment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::factory(50)->has(Image::factory()->count(1), 'images')->create();

        $users = User::factory(20)->create();

        $orders = Order::factory(10)
        ->make()
        ->each(function ($order) use($users) {
            $order->customer_id = $users->random()->id;
            $order->save(); 

        $payment = Payment::factory()->make();
        //$payment->order_id = $order->id;
        //$payment->save(); 
        $order->payment()->save($payment);
        });

        //$product = Product::factory(50)->has(Image::factory()->count(1), 'images')->create()
    }
}
