<?php

namespace App\Livewire\Dashboard\Widgets;

use Livewire\Component;

//use App\Models\Order;

class TicketsPendingCounter extends Component
{
    public function render()
    {
        return view('livewire.dashboard.widgets.tickets-pending-counter');
    }

    public function placeholder()
    {
        return <<<'HTML'
            <div class="fs-6 fw-semibold text-warning placeholder-glow">
                <span class="placeholder col-2"></span>
            </div>
        HTML;
    }
}
