<?php

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::truncate();
        if (app()->environment() != 'production') {
            DB::table('product_categories')->insert([
                'id'   => '1',
                'name' => 'Nước mắm',
                'parent_id' => '0'
            ]);
            DB::table('product_categories')->insert([
                'id'   => '2',
                'name' => 'Hoa quả',
                'parent_id' => '0'
            ]);
            DB::table('product_categories')->insert([
                'id'   => '3',
                'name' => 'Nước mắm Cát Hải',
                'parent_id' => '1'
            ]);
            DB::table('product_categories')->insert([
                'id'   => '4',
                'name' => 'Nước mắm Diêm Điền',
                'parent_id' => '1'
            ]);
            DB::table('product_categories')->insert([
                'id'   => '5',
                'name' => 'Nước mắm cốt',
                'parent_id' => '3'
            ]);
            DB::table('product_categories')->insert([
                'id'   => '6',
                'name' => 'Nước mắm loại 1',
                'parent_id' => '3'
            ]);
        }
    }
}
