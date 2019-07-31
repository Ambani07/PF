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
            'service_class' => 'Gold'
        ]);

    }
}