<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'category_id' => 1, // Cortes
            'name' => 'Corte para caballeros',
            'slug' => 'corte-para-caballeros',
            'price' => 250,
            'description' => 'Cortes personalizados para hombres, desde estilos clásicos hasta tendencias modernas',
            'image' => 'hair-cut-man.webp',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Item::create([
            'category_id' => 1, // Cortes
            'name' => 'Corte para damas',
            'slug' => 'corte-para-damas',
            'price' => 300,
            'description' => 'Transforma tu look con cortes diseñados para resaltar tu belleza única',
            'image' => 'hair-cut-woman.webp',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Item::create([
            'category_id' => 1, // Cortes
            'name' => 'Corte para niños',
            'slug' => 'corte-para-niños',
            'price' => 200,
            'description' => 'Cortes para los más pequeños',
            'image' => 'hair-cut-boys.webp',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Item::create([
            'category_id' => 1, // Cortes
            'name' => 'Corte de barba',
            'slug' => 'corte-de-barba',
            'price' => 300,
            'description' => 'Para los hombres que desean un cuidado especial para su barba, ofrecemos cortes y arreglos de barba precisos',
            'image' => 'beard-trimming.webp',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Item::create([
            'category_id' => 2, // Peinados
            'name' => 'Peinado especial',
            'slug' => 'peinado-especial',
            'price' => 450,
            'description' => '¿Tienes un evento especial? Permítenos crear un peinado que complemente tu atuendo y realce tu belleza',
            'image' => 'hair-treatment.webp',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Item::create([
            'category_id' => 2, // Peinados
            'name' => 'Laciado',
            'slug' => 'laciado',
            'price' => 450,
            'description' => 'Alisado profesional para un cabello suave y liso',
            'image' => 'hair-straightener.webp',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Item::create([
            'category_id' => 3, // Color
            'name' => 'Tinta',
            'slug' => 'tinta',
            'price' => 400,
            'description' => 'Renueva tu color con opciones personalizadas',
            'image' => 'hair-dye.webp',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
