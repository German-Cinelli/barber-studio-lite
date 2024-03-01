<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PersonalInformation;

class PersonalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PersonalInformation::create([
            'employee_id' => 1,
            'document' => '346687412',
            'location' => 'Centro, Montevideo',
            'address' => 'Street J. 1234',
            'phone' => '59812345678',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        PersonalInformation::create([
            'employee_id' => 2,
            'document' => '53022574',
            'location' => 'Centro, Montevideo',
            'address' => 'Street E. 1234',
            'phone' => '59811222333',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
