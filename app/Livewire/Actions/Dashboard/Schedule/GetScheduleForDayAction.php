<?php

namespace App\Livewire\Actions\Dashboard\Schedule;

use App\Models\Schedule;

class GetScheduleForDayAction
{
    public function handle($employee_id, $day)
    {
        $dayOfWeek = $day->dayOfWeek;

        if($dayOfWeek == 0){
            $dayOfWeek = 7;
        }

        return $schedule = Schedule::where('employee_id', $employee_id)
            ->where('weekday', $dayOfWeek)
            ->where('status', true)
            ->first();
    }
}
