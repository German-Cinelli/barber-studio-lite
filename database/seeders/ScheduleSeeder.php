<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * employee_id: 1
         */

         Schedule::create([
            'employee_id' => 1,
            'weekday' => 1,
            'start_time' => '09:00:00',
            'end_time' => '16:00:00',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Schedule::create([
            'employee_id' => 1,
            'weekday' => 2,
            'start_time' => '09:00:00',
            'end_time' => '16:00:00',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Schedule::create([
            'employee_id' => 1,
            'weekday' => 3,
            'start_time' => '09:00:00',
            'end_time' => '16:00:00',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Schedule::create([
            'employee_id' => 1,
            'weekday' => 4,
            'start_time' => '09:00:00',
            'end_time' => '16:00:00',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Schedule::create([
            'employee_id' => 1,
            'weekday' => 5,
            'start_time' => '09:00:00',
            'end_time' => '16:00:00',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Schedule::create([
            'employee_id' => 1,
            'weekday' => 6,
            'start_time' => '09:00:00',
            'end_time' => '13:00:00',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Schedule::create([
            'employee_id' => 1,
            'weekday' => 7,
            'start_time' => '09:00:00',
            'end_time' => '13:00:00',
            'status' => false,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /**
         * employee_id: 2
         */

         Schedule::create([
            'employee_id' => 2,
            'weekday' => 1,
            'start_time' => '09:00:00',
            'end_time' => '16:00:00',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Schedule::create([
            'employee_id' => 2,
            'weekday' => 2,
            'start_time' => '09:00:00',
            'end_time' => '16:00:00',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Schedule::create([
            'employee_id' => 2,
            'weekday' => 3,
            'start_time' => '09:00:00',
            'end_time' => '16:00:00',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Schedule::create([
            'employee_id' => 2,
            'weekday' => 4,
            'start_time' => '09:00:00',
            'end_time' => '16:00:00',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Schedule::create([
            'employee_id' => 2,
            'weekday' => 5,
            'start_time' => '09:00:00',
            'end_time' => '16:00:00',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Schedule::create([
            'employee_id' => 2,
            'weekday' => 6,
            'start_time' => '09:00:00',
            'end_time' => '13:00:00',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Schedule::create([
            'employee_id' => 2,
            'weekday' => 7,
            'start_time' => '09:00:00',
            'end_time' => '13:00:00',
            'status' => false,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
