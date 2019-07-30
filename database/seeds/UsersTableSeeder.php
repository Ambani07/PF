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
                'name' => 'admin',
                'surname' => 'admin',
                'email' => 'admin@admin.com',
                'role_id' => 1,
                'tel_no' => '+27 21 124 8965',
                'cell_no' => '+27 72 445 9986',
                'password' => Hash::make('test'),
                'created_at' => $now,
                'updated_at' => $now
            ]
        );
    }
}
