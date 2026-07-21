<?php

namespace Database\Seeders;

use App\Models\SystemSetting;
use Illuminate\Database\Seeder;

class SystemSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SystemSetting::create([
            'system_name' => 'Rentaly',
            'logo' => 'frontend/images/logo.png',
            'favicon' => 'frontend/images/icon.png',
            'copyright' => '© ' . date('Y') . ' Rentaly. All rights reserved.',
            'address' => '123 Main Street, New York, NY 10001, United States',
        ]);
    }
}
