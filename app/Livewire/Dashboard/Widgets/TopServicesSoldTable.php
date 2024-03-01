<?php

namespace App\Livewire\Dashboard\Widgets;

use Livewire\Component;

use App\Livewire\Traits\ImageTrait;

//use App\Models\Service;

//use DB;

class TopServicesSoldTable extends Component
{
    use ImageTrait;

    public function render()
    {
        return view('livewire.dashboard.widgets.top-services-sold-table');
    }
}
