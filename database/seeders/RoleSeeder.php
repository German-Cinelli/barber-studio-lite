<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Admin',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Role::create([
            'name' => 'Customer',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Role::create([
            'name' => 'Final consumer',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
