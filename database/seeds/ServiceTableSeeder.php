<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'customer_id' => 1,
            'user_id' => 1,
            'type_of_service' => 'International IP Transit',
            'sla' => false,
            'cover_period' => 'Premium',
            'service_class' => 'Gold (1:1)'
        ]);

        Service::create([
            'customer_id' => 2,
            'user_id' => 1,
            'type_of_service' => 'National/International 75/25',
            'sla' => true,
            'cover_period' => 'Extended',
            'service_class' => 'Silver (1:3)'
        ]);

    }
}