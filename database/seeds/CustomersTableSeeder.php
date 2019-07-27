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
                'firstname' => 'Ambani',
                'lastname' => 'Matsedu',
                'email' => 'ambani@example.com',
                'company' => 'BCX',
                'street' => '1021 Lenchen Ave N',
                'suburb' => 'Centurion Central',
                'city' => 'Pretoria',
                'region' => 'Centurion',
                'contactPerson' => 'John',
                'contactPersonPhone' => '+27 72 427 2236',
                'contactPersonCell' => '+27 11 222 4785',
                'contactPersonEmail' => 'john@gmail.com',
                'term' => 2
            ]);

        
    }
}
