<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Supplier;
class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
            Supplier::create([
                'supplier_id' => $i+1,
                'name' => $faker->sentence(1, true),
                'contact_info' => $faker->sentence(2, true),
            ]);
        }
    }
}
