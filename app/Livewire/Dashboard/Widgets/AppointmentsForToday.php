<?php

namespace App\Livewire\Dashboard\Widgets;

use Livewire\Component;

use App\Models\Appointment;

class AppointmentsForToday extends Component
{
    public function render()
    {
        return view('livewire.dashboard.widgets.appointments-for-today')->with([
            'finishedAppointmentsCount' => Appointment::whereIn('status_id', [5])
                ->whereDate('start_time', now()->toDateString())
                ->count(),
            'pendingAppointmentsCount' => Appointment::whereIn('status_id', [2, 3, 4, 5])
                ->whereDate('start_time', now()->toDateString())
                ->count()
        ]);
    }

    public function placeholder()
    {
        return <<<'HTML'
            <div class="fs-6 fw-semibold text-primary placeholder-glow">
                <span class="placeholder col-4"></span>
            </div>
        HTML;
    }
}
