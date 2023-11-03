<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Factory as Faker;
class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
            Order::create([
                'orders_id' => $i+1,
                'product_id' => $faker->numberBetween(1, 10),
                'quantity' => $faker->numberBetween(1, 10),
                'supplier_id' => $faker->numberBetween(1, 10),
                'order_date' => $faker->date('Y-m-d', 'now'),
            ]);
        }
    }
}
