<?php

namespace App\Livewire\Actions\Dashboard\Employee;

use App\Models\Employee;

class UpdateAction
{
    public function handle($id, $name, $description, $image)
    {
        return Employee::findOrFail($id)->update([
            'name' => $name,
            'description' => $description,
            'image' => $image
        ]);
    }
}
