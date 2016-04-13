<?php

use Illuminate\Database\Seeder;
use App\Models\NewsCategory;

class NewsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsCategory::truncate();
        if (app()->environment() != 'production') {
            DB::table('news_categories')->insert([
                'name' => 'Trong nước',
                'type' => 0,
            ]);
            DB::table('news_categories')->insert([
                'name' => 'Quốc tế',
                'type' => 0,
            ]);
        }
    }
}
