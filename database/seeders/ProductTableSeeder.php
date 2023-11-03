<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
            Product::create([
                'product_id' => $i+1,
                'name' => $faker->sentence(1, true),
                'description' => $faker->sentence(2, true),
                'price' => $faker->numberBetween(1, 10),
                'stock' => $faker->numberBetween(1, 10),
                'quantity' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
