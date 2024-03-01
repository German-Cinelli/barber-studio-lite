<?php

namespace App\Livewire\Actions\Dashboard\Setting;

use App\Models\Setting;

class UpdateAppointmentTypeAction
{
    public function handle($type)
    {
        $setting = Setting::firstOrFail();

        return $setting->update([
            'appointment_type' => $type
        ]);
    }
}
