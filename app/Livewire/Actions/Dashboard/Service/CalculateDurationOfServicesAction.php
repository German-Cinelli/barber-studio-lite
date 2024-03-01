<?php

namespace App\Livewire\Actions\Dashboard\Service;

use App\Models\Appointment;

class CalculateDurationOfServicesAction
{
    public function handle($appointment)
    {
        return Appointment::withSum('services', 'duration_time')
            ->findOrFail($appointment)->services_sum_duration_time;
    }
}
