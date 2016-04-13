<?php

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::truncate();
        if (app()->environment() != 'production') {
            factory(News::class, 50)->create();
        }
    }
}
