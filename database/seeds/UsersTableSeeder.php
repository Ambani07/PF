<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\User;

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
                'email' => 'admin@admin.com',
                'password' => md5('testtest'),
                'created_at' => $now,
                'updated_at' => $now
            ]
        );
    }
}
