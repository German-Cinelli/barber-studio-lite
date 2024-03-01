<?php

namespace App\Livewire\Actions\Dashboard\AppointmentService;

use App\Models\AppointmentService;

class CheckServiceExistInAppointmentServiceAction
{
    public function handle($appointment, $service)
    {
        return AppointmentService::firstOrCreate(
            ['appointment_id' => $appointment, 'service_id' => $service],
        );
    }
}
