<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Cortes',
            'slug' => 'cortes',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Category::create([
            'name' => 'Peinados',
            'slug' => 'peinados',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Category::create([
            'name' => 'Color',
            'slug' => 'color',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Category::create([
            'name' => 'Tratamientos',
            'slug' => 'tratamientos',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
