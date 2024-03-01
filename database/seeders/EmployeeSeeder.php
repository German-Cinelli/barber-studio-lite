<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'name' => 'Juan',
            'description' => 'Barbero',
            'image' => 'juan-avatar.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Employee::create([
            'name' => 'Anna',
            'description' => 'Peinados & Cortes & Uñas',
            'image' => 'anna-avatar.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
