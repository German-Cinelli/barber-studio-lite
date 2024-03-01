<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => 'Cancelado',
            'description' => 'Agenda cancelada',
            'bg_color' => 'danger'
        ]);

        Status::create([
            'name' => 'Pendiente',
            'description' => 'Pendiente de llegada',
            'bg_color' => 'warning'
        ]);

        Status::create([
            'name' => 'En espera',
            'description' => 'En sala de espera',
            'bg_color' => 'success'
        ]);

        Status::create([
            'name' => 'Atendiendo',
            'description' => 'En atención',
            'bg_color' => 'info'
        ]);

        Status::create([
            'name' => 'Concluido',
            'description' => 'Agenda concluida',
            'bg_color' => 'primary'
        ]);
    }
}
