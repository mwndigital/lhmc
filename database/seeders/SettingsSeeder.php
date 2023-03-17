<?php

namespace Database\Seeders;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'key' => 'site_name',
            'value' => 'LHMC',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Setting::create([
           'key' => 'site_url',
           'value' => 'http://lhmc.local:8888',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
        ]);
    }
}
