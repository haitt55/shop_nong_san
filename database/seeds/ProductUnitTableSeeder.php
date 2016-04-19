<?php

use Illuminate\Database\Seeder;

class ProductUnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_units')->truncate();
        if (app()->environment() != 'production') {
            DB::table('product_units')->insert([
                'name' => 'ml',
                'type' => 0,
            ]);
            DB::table('product_units')->insert([
                'name' => 'l',
                'type' => 0,
            ]);
        }
    }
}