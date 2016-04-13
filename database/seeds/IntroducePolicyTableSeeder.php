<?php

use Illuminate\Database\Seeder;
use App\Models\IntroducePolicy;

class IntroducePolicyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IntroducePolicy::truncate();
        if (app()->environment() != 'production') {
            factory(IntroducePolicy::class, 5)->create();
        }
    }
}
