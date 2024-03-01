<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Social;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Social::create([
            'name' => 'Instagram',
            'icon' => 'instagram',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Social::create([
            'name' => 'Linkedin',
            'icon' => 'linkedin-in',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Social::create([
            'name' => 'Facebook',
            'icon' => 'facebook',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Social::create([
            'name' => 'TikTok',
            'icon' => 'tiktok',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Social::create([
            'name' => 'Website',
            'icon' => 'link',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
