<?php

namespace App\Livewire\Actions\Dashboard\Appointment;

use App\Models\Appointment;

use Carbon\Carbon;

class CancelAction
{
    public function handle($appointment)
    {
        return Appointment::findOrFail($appointment)->update([
            'status_id' => 1 // Cancelado
        ]);
    }
}
