<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\EmployeeSocial;

class EmployeeSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeSocial::create([
            'employee_id' => 1,
            'social_id' => 1,
            'href' => 'instagram.com/@juan',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        EmployeeSocial::create([
            'employee_id' => 1,
            'social_id' => 2,
            'href' => 'linkedin.com/in/@juan',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        EmployeeSocial::create([
            'employee_id' => 2,
            'social_id' => 1,
            'href' => 'instagram.com/@anna',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        EmployeeSocial::create([
            'employee_id' => 2,
            'social_id' => 2,
            'href' => 'linkedin.com/in/@anna',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
