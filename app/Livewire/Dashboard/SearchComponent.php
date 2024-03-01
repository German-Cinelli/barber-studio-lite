<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class SearchComponent extends Component
{
    public string $search;

    public function updatedSearch()
    {
        $this->dispatch('changed-search', $this->search);
    }
}
