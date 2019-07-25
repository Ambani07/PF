<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        //
        Product::create([
            'name' => 'EI',
            'updated_at' => $now,
            'created_at' => $now
        ]);

        Product::create([
            'name' => 'TI-DIS',
            'updated_at' => $now,
            'created_at' => $now
        ]);

        Product::create([
            'name' => 'BCX DI',
            'updated_at' => $now,
            'created_at' => $now
        ]);

        Product::create([
            'name' => 'FTTB',
            'updated_at' => $now,
            'created_at' => $now
        ]);

        Product::create([
            'name' => 'FTTH',
            'updated_at' => $now,
            'created_at' => $now
        ]);
    }
}
