<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            [
                'name' => 'Manager',
                'read_only' => false
            ]
        );

        Role::create(
            [
                'name' => 'TA',
                'read_only' => false
            ]
        );

        Role::create(
            [
                'name' => 'PMO'
            ]
        );

        Role::create(
            [
                'name' => 'SD'
            ]
        );
        Role::create(
            [
                'name' => 'CBO'
            ]
        );

        Role::create(
            [
                'name' => 'TS'
            ]
        );

        Role::create(
            [
                'name' => 'SI'
            ]
        );
    }
}
