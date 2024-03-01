<?php

namespace App\Livewire\Actions\Dashboard\Schedule;

use App\Models\Schedule;

class CreateAction
{
    public function handle($employee_id)
    {
        for ($i = 1; $i < 8; $i++) {
            Schedule::create([
                'employee_id' => $employee_id,
                'weekday' => $i,
                'start_time' => '9:00',
                'end_time' => '17:00'
            ]);
        }

        return false;
    }
}
