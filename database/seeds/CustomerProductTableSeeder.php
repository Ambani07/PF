<?php

use Illuminate\Database\Seeder;
use App\CustomerProduct;

class CustomerProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerProduct::create([
            'customer_id' => 1,
            'product_id' => 1,
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}
