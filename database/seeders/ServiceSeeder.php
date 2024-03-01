<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'item_id' => 1,
            'duration_time' => 40,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Service::create([
            'item_id' => 2,
            'duration_time' => 40,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Service::create([
            'item_id' => 3,
            'duration_time' => 25,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Service::create([
            'item_id' => 4,
            'duration_time' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Service::create([
            'item_id' => 5,
            'duration_time' => 40,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Service::create([
            'item_id' => 6,
            'duration_time' => 25,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Service::create([
            'item_id' => 7,
            'duration_time' => 40,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
