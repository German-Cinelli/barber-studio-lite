<?php

namespace App\Livewire\Actions\Dashboard\Appointment;

use App\Models\Appointment;

use Carbon\Carbon;

class CreateAction
{
    public function handle($name, $type_id, $employee_id = null, $phone = null, $start_time = false, $end_time = null, $status_id = 3)
    {
        return Appointment::create([
            'customer_id' => 1, // Consumidor final
            'status_id' => $status_id, // En espera
            'type_id' => $type_id,
            'name' => $name,
            'employee_id' => $employee_id,
            'phone' => $phone,
            'start_time' => $start_time ? $start_time : Carbon::now(),
            'end_time' => $end_time,
        ]);
    }
}
