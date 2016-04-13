<?php

use Illuminate\Database\Seeder;
use App\Models\ProductArticle;
use Faker\Generator;

class ProductArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        ProductArticle::truncate();
        if (app()->environment() != 'production') {
            DB::table('product_articles')->insert([
                'order' => 1,
                'image' => '/public/img/no_image.png',
                'image_comment' => $faker->sentence,
                'product_id' => '1',
                'paragraph' => '<p>' . implode('</p><p>', $faker->paragraphs()) . '</p>'
            ]);
            DB::table('product_articles')->insert([
                'order' => 2,
                'image' => '/public/img/no_image.png',
                'image_comment' => $faker->sentence(),
                'product_id' => '1',
                'paragraph' => '<p>' . implode('</p><p>', $faker->paragraphs()) . '</p>'
            ]);
            DB::table('product_articles')->insert([
                'order' => 3,
                'image' => '/public/img/no_image.png',
                'image_comment' => $faker->sentence(),
                'product_id' => '1',
                'paragraph' => '<p>' . implode('</p><p>', $faker->paragraphs()) . '</p>'
            ]);
        }
    }
}
