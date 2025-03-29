<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Settings::updateOrCreate(['email' => 'admin@admin.com'], [
            'name' => 'Digital',
            'email' => 'admin@admin.com',
            'phone' => '0123456789',
            'address' => 'Jl. Raya Purworejo',
        ]);
    }
}
