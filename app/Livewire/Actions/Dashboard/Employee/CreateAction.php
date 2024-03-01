<?php

namespace App\Livewire\Actions\Dashboard\Employee;

use App\Models\Employee;

class CreateAction
{
    public function handle($name, $description, $image)
    {
        return Employee::create([
            'name' => $name,
            'description' => $description,
            'image' => $image
        ]);
    }
}
