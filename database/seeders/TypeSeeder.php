<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'Flash',
            'description' => 'Son las que se ingresan desde el tablero cuando un cliente asiste sin una agenda previa',
            'bg_color' => 'primary'
        ]);

        Type::create([
            'name' => 'Local',
            'description' => 'Se ingresan desde el panel administrativo con el propósito de reservar el horario de consulta a los clientes',
            'bg_color' => 'info'
        ]);

        Type::create([
            'name' => 'Web',
            'description' => 'Son los clientes mismos quienes se agendan por su cuenta a través de la web',
            'bg_color' => 'danger'
        ]);
    }
}
