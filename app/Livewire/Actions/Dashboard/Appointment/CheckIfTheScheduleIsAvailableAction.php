<?php

namespace App\Livewire\Actions\Dashboard\Appointment;

use Carbon\Carbon;

use App\Models\Appointment;

class CheckIfTheScheduleIsAvailableAction
{
    public function handle($employee_id, $date, $startTime, $serviceDurationInMinutes)
    {
        $dateTime = Carbon::parse("$date $startTime");

        // Calcular la hora de finalización del servicio
        $endTime = $dateTime->copy()->addMinutes($serviceDurationInMinutes);

        // Consultar las citas existentes para ese empleado en ese día y hora
        $existingAppointments = Appointment::where('employee_id', $employee_id)
            ->whereDate('start_time', '=', $dateTime->toDateString())
            ->get();

        // Verificar si hay conflicto con las citas existentes
        $hasConflict = $existingAppointments->contains(function ($appointment) use ($dateTime, $endTime) {
            $existingStart = Carbon::parse($appointment->start_time);
            $existingEnd = Carbon::parse($appointment->end_time);

            // Permitir que el horario final coincida con el horario inicial de otra agenda
            return $dateTime->between($existingStart, $existingEnd->subMinute()) || $endTime->between($existingStart->addMinute(), $existingEnd);
        });

        if (!$hasConflict) {
            return true;
        }

        return false;
    }
}
