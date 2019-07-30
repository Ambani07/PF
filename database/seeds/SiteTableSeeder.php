<?php

use Illuminate\Database\Seeder;
use App\Site;

class SiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Site::create([
            'customer_id' => 1,
            'service_id' => 1,
            'network_id' => 1,
            'name' => 'Telkom centurion',
            'region_name' => 'ER',
            'street' => '61 Oak Ave',
            'suburb' => 'Highveld Techno Park, Centurion',
            'city' => 'Pretoria'
        ]);
    }
}
