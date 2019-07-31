<?php

use Illuminate\Database\Seeder;
use App\Network;

class NetworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Network::create([
            'service_id' => 1,
            'site_id' => 1,
            'user_id' => 1,
            'circuit_no' => '1235415',
            // 'ntu_no' => '989565',
            'ntu_name' => 'New SAS-E',
            'physical_interface' => 'Optical',
            'encapsulation' => 'dot1q',
            'customer_facing_port' => 80,
            'customer_vlan' => '465185235',
            'ntu_ip_address' => '165.165.147.246',
            'link_subnet' => '1111111010',
            'gateway_address' => '172.22.194.100',
            'bandwidth' => 200,
            'me_access_type' => 'Metro Link',
            'me_node' => '5464451',
            'me_port' => '250'
        ]);
    }
}
