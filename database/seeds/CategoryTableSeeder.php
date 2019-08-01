<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::create([
            'name' => 'BCX DI',
            'updated_at' => $now,
            'created_at' => $now
        ]);

        Category::create([
            'name' => 'EI',
            'updated_at' => $now,
            'created_at' => $now
        ]);

        Category::create([
            'name' => 'TI-DIS',
            'updated_at' => $now,
            'created_at' => $now
        ]);
    }
}
