<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Department::create([
            'name' => 'Internet Service Provider',
            'street' => 'Street name 1',
            'suburb' => 'Centurion',
            'city' => 'Pretoria'
        ]);

        Department::create([
            'name' => 'Internet Access',
            'street' => 'Street name 1',
            'suburb' => 'Centurion',
            'city' => 'Pretoria'
        ]);

        Department::create([
            'name' => 'VOICE',
            'street' => 'Street name 1',
            'suburb' => 'Centurion',
            'city' => 'Pretoria'
        ]);
    }
}
