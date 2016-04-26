<?php

use Illuminate\Database\Seeder;
use App\Models\AppSetting;

class AppSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppSetting::truncate();
        $appSettings = [
            [
                'key' => 'name',
                'value' => 'GCMS',
            ],
            [
                'key' => 'company',
                'value' => 'CÔNG TY TNHH GTK',
            ],
            [
                'key' => 'email',
                'value' => 'cuong@gtk.vn',
            ], [
                'key' => 'phone',
                'value' => '0979.861.547',
            ], [
                'key' => 'address',
                'value' => 'No. 1C, Lane 105/41 Yen Hoa, Cau Giay District, Hanoi',
            ], [
                'key' => 'page_title',
                'value' => 'An awesome CMS!',
            ], [
                'key' => 'meta_keyword',
                'value' => 'awesome,cms',
            ], [
                'key' => 'meta_description',
                'value' => 'GCMS is an awesome CMS!',
            ], [
                'key' => 'latitude',
                'value' => '21.02163',
            ], [
                'key' => 'longitude',
                'value' => '105.79544',
            ], [
                'key' => 'currency_word',
                'value' => 'Đ',
            ], [
                'key' => 'whole_phone',
                'value' => '0966.668.001',
            ], [
                'key' => 'whole_telephone',
                'value' => '0466.668.001',
            ], [
                'key' => 'retail_phone',
                'value' => '0966.888.002',
            ], [
                'key' => 'retail_telephone',
                'value' => '0466.888.002',
            ], [
                'key' => 'source_telephone',
                'value' => '0466.888.888',
            ]
        ];
        foreach ($appSettings as $appSetting) {
            AppSetting::create($appSetting);
        }
    }
}
