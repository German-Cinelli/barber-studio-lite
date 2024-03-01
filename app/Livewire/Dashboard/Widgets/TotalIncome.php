<?php

namespace App\Livewire\Dashboard\Widgets;

use Livewire\Component;

//use App\Models\Order;

class TotalIncome extends Component
{
    public $totalIncome = false;
    public function render()
    {
        return view('livewire.dashboard.widgets.total-income');
    }

    public function placeholder()
    {
        return <<<'HTML'
            <div class="fs-6 fw-semibold text-info placeholder-glow">
                <span class="placeholder col-12"></span>
            </div>
        HTML;
    }
}
