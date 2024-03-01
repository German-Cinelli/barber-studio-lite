<?php

namespace App\Livewire\Dashboard\Widgets;

use Livewire\Component;

use App\Models\Appointment;

class TypeOfAppointmentsChart extends Component
{
    public function render()
    {
        return view('livewire.dashboard.widgets.type-of-appointments-chart')->with([
            'flashAppointmentsCount' => Appointment::where('type_id', 1)->count(),
            'localAppointmentsCount' => Appointment::where('type_id', 2)->count(),
            'webAppointmentsCount' => Appointment::where('type_id', 3)->count()
        ]);
    }
}
