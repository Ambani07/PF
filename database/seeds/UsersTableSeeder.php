<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $now = Carbon::now()->toDateTimeString();
        User::create(
            [
                'department_id' => 1,
                'name' => 'Ambani',
                'surname' => 'Matsedu',
                'email' => 'Ambani@gmail.com',
                'role_id' => 1,
                'tel_no' => '+27 21 124 8965',
                'cell_no' => '+27 72 445 9986',
                'password' => Hash::make('test'),
                'created_at' => $now,
                'updated_at' => $now
            ]
        );

        User::create(
            [
                'department_id' => 2,
                'name' => 'Mark',
                'surname' => 'Peterson',
                'email' => 'mark@gmail.com',
                'role_id' => 1,
                'tel_no' => '+27 21 324 5524',
                'cell_no' => '+27 72 985 7742',
                'password' => Hash::make('test'),
                'created_at' => $now,
                'updated_at' => $now
            ]
        );
    }
}
