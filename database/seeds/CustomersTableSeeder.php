<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Customer;
use App\Product;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i < 5; $i++){
            Customer::create([
                'name' => 'customer ' . $i,
                'surname' => 'customer '.$i,
                'email' => Str::random(10),
                'company' => 'bcx '.$i,
            ])->customer()->attach(1);
        }
        $product = Product::find(1);
        $product->customer()->attach(2);
        
    }
}
