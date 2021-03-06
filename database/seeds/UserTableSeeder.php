<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'admin',
            'email' => 'cuong@gtk.vn',
            'password' => bcrypt('123456'),
        ]);
        if (app()->environment() != 'production') {
            factory(User::class, 50)->create();
        }
    }
}
