<?php

namespace App\Livewire\Actions\Dashboard\Appointment;

use App\Models\Appointment;

class UpdateEmployeeAction
{
    public function handle($appointment, $employee)
    {
        return Appointment::findOrFail($appointment)->update([
            'employee_id' => $employee
        ]);
    }
}
