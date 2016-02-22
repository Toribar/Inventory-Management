<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = factory(App\Product::class, 20)->create();

        for ($i = 0; $i < 300; $i++) {
            factory(App\Transaction::class)->create(['product_id' => $products->random()]);
        }
    }
}
