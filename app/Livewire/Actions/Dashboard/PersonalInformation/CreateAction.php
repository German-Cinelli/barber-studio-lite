<?php

namespace App\Livewire\Actions\Dashboard\PersonalInformation;

use App\Models\PersonalInformation;

class CreateAction
{
    public function handle($employee_id)
    {
        return PersonalInformation::create([
            'employee_id' => $employee_id
        ]);
    }
}
