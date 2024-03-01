<?php

namespace App\Livewire\Actions\Dashboard\EmployeeSocial;

use App\Models\EmployeeSocial;

class CreateAction
{
    public function handle($employee_id, $social_id, $href)
    {
        return EmployeeSocial::create([
            'employee_id' => $employee_id,
            'social_id' => $social_id,
            'href' => $href
        ]);
    }
}
