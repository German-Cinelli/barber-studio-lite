<?php

namespace App\Livewire\Dashboard\Widgets;

use Livewire\Component;

use App\Livewire\Traits\ImageTrait;

//use App\Models\Product;

//use DB;

class TopProductsSoldTable extends Component
{
    use ImageTrait;

    public function render()
    {
        return view('livewire.dashboard.widgets.top-products-sold-table');
    }
}
