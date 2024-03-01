<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            RoleSeeder::class,
            SocialSeeder::class,
            ItemSeeder::class,
            ServiceSeeder::class,
            StatusSeeder::class,
            TypeSeeder::class,

            UserSeeder::class,
            CustomerSeeder::class,

            EmployeeSeeder::class, // De prueba
            EmployeeSocialSeeder::class, // De prueba
            PersonalInformationSeeder::class, // De prueba
            ScheduleSeeder::class, // De prueba
        ]);
    }
}
