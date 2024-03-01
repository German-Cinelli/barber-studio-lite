<?php

namespace App\Livewire\Actions\Dashboard\Appointment;

use App\Models\Appointment;

class FinishAppointmentAction
{
    public function handle($appointment)
    {
        return Appointment::findOrFail($appointment)->update([
            'status_id' => 5
        ]);
    }
}
