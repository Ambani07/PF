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

            Customer::create([
                'user_id' => 1,
                'name' => 'Telkom',
                'contactPerson' => 'John',
                'contactPersonPhone' => '+27 72 427 2236',
                'contactPersonCell' => '+27 11 222 4785',
                'contactPersonEmail' => 'john@gmail.com',
            ]);

        
    }
}
