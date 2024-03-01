<?php

namespace App\Livewire\Actions\Dashboard\Appointment;

use App\Models\Appointment;

use Carbon\Carbon;

class AttendCustomerAction
{
    public function handle($appointment, $duration)
    {
        $now = Carbon::now();

        return Appointment::findOrFail($appointment)->update([
            'status_id' => 4,
            'start_time' => $now,
            'end_time' => $now->copy()->addMinutes($duration)
        ]);
    }
}
