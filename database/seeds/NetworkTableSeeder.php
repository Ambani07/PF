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
            'ntu' => 'New SAS-E',
            'ntu_name' => 'N/A',
            'physical_interface' => 'Electrical',
            'encapsulation' => 'N/A',
            'customer_facing_port' => 80,
            'customer_vlan' => '465185235',
            'ntu_ip_address' => '165.165.147.246',
            'link_subnet' => '1111111010',
            'gateway_address' => '172.22.194.100',
            'bandwidth' => 200,
            'me_access_type' => 'Metro Link',
            'me_node' => '5464451',
            'me_access_no' => '6561',
            'me_port' => '60'
        ]);

        Network::create([
            'service_id' => 2,
            'site_id' => 2,
            'user_id' => 2,
            'circuit_no' => '5646844',
            'ntu' => 'New SAS-E',
            'ntu_name' => 'N/A',
            'physical_interface' => 'Optical',
            'encapsulation' => 'N/A',
            'customer_facing_port' => 70,
            'customer_vlan' => '98789787',
            'ntu_ip_address' => '165.165.147.246',
            'link_subnet' => '255.255.255.0',
            'gateway_address' => '167.41.41.100',
            'bandwidth' => 500,
            'me_access_type' => 'Metro Link',
            'me_node' => '998635',
            'me_access_no' => '36689',
            'me_port' => '80'
        ]);
    }
}
