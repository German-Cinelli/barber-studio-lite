<?php

namespace App\Livewire\Actions\Dashboard\Employee;

use Illuminate\Support\Collection;

use Carbon\Carbon;

use App\Models\Appointment;

class GetAvailableSchedulesAction
{
    public function handle($employee_id, $date, $schedule, $serviceDurationInMinutes)
    {

        $appointments = Appointment::where('employee_id', $employee_id)
        ->whereDate('start_time', Carbon::parse($date)->toDateString())
        ->orderBy('start_time')
        ->get();

    $fullDaySchedule = [
        'start' => Carbon::parse($schedule->start_time)->format('H:i'),
        'end' => Carbon::parse($schedule->end_time)->format('H:i')
    ];

    $busyTimeSlots = $appointments->map(function ($appointment) {
        return [
            'start' => Carbon::parse($appointment->start_time)->format('H:i'),
            'end' => Carbon::parse($appointment->end_time)->format('H:i'),
        ];
    });

    $intervalDuration = 5;
    $employeeWorkingIntervals = [];

    $startTime = Carbon::parse($fullDaySchedule['start']);
    $endTime = Carbon::parse($fullDaySchedule['end']);

    while ($startTime->lte($endTime)) {
        $endInterval = $startTime->copy()->addMinutes($serviceDurationInMinutes);

        $isIntervalAvailable = $busyTimeSlots->every(function ($busySlot) use ($startTime, $endInterval) {
            $busyStart = Carbon::parse($busySlot['start']);
            $busyEnd = Carbon::parse($busySlot['end']);

            return $startTime->gte($busyEnd) || $endInterval->lte($busyStart);
        });

        if ($isIntervalAvailable) {
            $employeeWorkingIntervals[] = [
                'start' => $startTime->copy()->format('H:i'),
                'end' => $endInterval->format('H:i'),
            ];
        }

        $startTime->addMinutes($intervalDuration);

        // Salir del bucle si hemos alcanzado o superado el horario de finalización
        if ($endInterval->gte($endTime)) {
            break;
        }
    }

    return $employeeWorkingIntervals;
    }
}
