<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Page::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => '<p>' . implode('</p><p>', $faker->paragraphs()) . '</p>',
        'page_title' => $faker->sentence(),
        'meta_keyword' => implode(',', $faker->words()),
        'meta_description' => $faker->text(),
        'published' => $faker->boolean(),
    ];
});

$factory->define(App\Models\Article::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'excerpt' => $faker->paragraph(),
        'content' => '<p>' . implode('</p><p>', $faker->paragraphs()) . '</p>',
        'author_id' => $faker->randomElement(App\Models\User::lists('id')->toArray()),
        'page_title' => $faker->sentence(),
        'meta_keyword' => implode(',', $faker->words()),
        'meta_description' => $faker->text(),
        'published' => $faker->boolean(),
    ];
});

$factory->define(App\Models\Message::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone_number' => $faker->phoneNumber,
        'content' => '<p>' . implode('</p><p>', $faker->paragraphs()) . '</p>',
        'unread' => $faker->boolean(),
    ];
});

$factory->define(App\Models\News::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'excerpt' => $faker->paragraph(),
        'content' => '<p>' . implode('</p><p>', $faker->paragraphs()) . '</p>',
        'category_id' => $faker->randomElement(App\Models\NewsCategory::lists('id')->toArray()),
        'page_title' => $faker->sentence(),
        'meta_keyword' => implode(',', $faker->words()),
        'meta_description' => $faker->text(),
        'published' => 1,
    ];
});

$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => 'product '. $faker->name,
        'price' => $faker->randomNumber(3) . '0000',
        'discount' => $faker->randomNumber(2),
        'detail' => '<p>' . implode('</p><p>', $faker->paragraphs()) . '</p>',
        'category_id' => $faker->randomElement(App\Models\ProductCategory::lists('id')->toArray()),
        'page_title' => $faker->sentence,
        'meta_keyword' => implode(',', $faker->words()),
        'meta_description' => $faker->text(),
    ];
});

$factory->define(App\Models\IntroducePolicy::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'excerpt' => $faker->paragraph(),
        'content' => '<p>' . implode('</p><p>', $faker->paragraphs()) . '</p>',
        'page_title' => $faker->sentence,
        'meta_keyword' => implode(',', $faker->words()),
        'meta_description' => $faker->text(),
        'published' => 1,
    ];
});