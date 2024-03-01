<?php

namespace App\Livewire\Actions\Dashboard\Appointment;

use App\Models\Appointment;

class CheckIfEmployeeIsAvailableAction
{
    public function handle($employee)
    {
        return Appointment::with('employee')
            ->where('employee_id', $employee)
            ->where('status_id', 4)
            ->exists();
    }
}
