<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(SiteTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(NetworkTableSeeder::class);
        //old seeders
        $this->call(ProductTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CustomerProductTableSeeder::class);
    }
}
