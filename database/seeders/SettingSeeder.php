<?php

namespace Database\Seeders;

use App\Models\Setting\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'variation_type',
                'value' => 'سایز',
                'sort' => 1,
            ],
            [
                'key' => 'variation_type',
                'value' => 'رنگ',
                'sort' => 2,
            ],
            [
                'key' => 'variation_type',
                'value' => 'کیفیت',
                'sort' => 3,
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
