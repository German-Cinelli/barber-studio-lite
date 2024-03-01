<?php

namespace App\Livewire\Actions\Dashboard\Setting;

use App\Models\Setting;

class UpdateActiveAppointmentAction
{
    public function handle()
    {
        $setting = Setting::firstOrFail();

        $setting->update([
            'active_appointment' => !$setting->active_appointment
        ]);

        return $setting->fresh()->active_appointment;
    }
}
