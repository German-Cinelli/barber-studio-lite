<?php

namespace App\Livewire\Actions\Dashboard\AppointmentService;

use App\Models\AppointmentService;

class DeleteServiceAction
{
    public function handle($appointment, $service)
    {
        return AppointmentService::where('appointment_id', $appointment)
            ->where('service_id', $service)
            ->firstOrFail()
            ->delete();
    }
}
