<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Product::create([
            'category_id' => 1,
            'customer_id' => 1,
            'term' => 4,
            'vlan_id' => '6421646213451',
            'circuit_no' => '2338121245',
            'no_ips' => '20',
            'total_bandwidth' => '50',
            'local_bandwidth' => '30',
            'int_bandwidth' => '20',
            'accessType' => 'Metro LAN',
            'accessSpeed' => '20',
            'ei_option' => '',
            'bandwidth_scheduling' => '',
            'prioritisation' => '',
            'product_name' => 'EI',
            'username' => 'Thabo',
            'access_username' => 'thabo123',
            'updated_at' => $now,
            'created_at' => $now
        ]);
        
    }
}
