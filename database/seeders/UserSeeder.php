<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Consumidor final',
            'email' => 'consumidorfinal@example.com',
            'password' => bcrypt(Str::random(16)),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $user->assignRole(['Final consumer']);

        $user = User::create([
            'name' => 'Administrador',
            'email' => 'admin@coderstrike.com',
            'password' => bcrypt('1234'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $user->assignRole(['Admin']);

        $user = User::create([
            'name' => 'Cliente',
            'email' => 'customer@coderstrike.com',
            'password' => bcrypt('1234'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $user->assignRole(['Customer']);
    }
}
