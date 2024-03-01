<?php

namespace App\Livewire\Dashboard\Widgets;

use Livewire\Component;

use App\Models\Appointment;

class WaitingCustomersCounter extends Component
{
    public function render()
    {
        return view('livewire.dashboard.widgets.waiting-customers-counter')->with([
            'waitingCustomersCounter' => Appointment::where('status_id', 3)
                ->whereDate('start_time', now()->toDateString())
                ->count()
        ]);
    }

    public function placeholder()
    {
        return <<<'HTML'
            <div class="fs-6 fw-semibold text-danger placeholder-glow">
                <span class="placeholder col-2"></span>
            </div>
        HTML;
    }
}
