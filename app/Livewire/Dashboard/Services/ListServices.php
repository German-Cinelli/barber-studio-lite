<?php

namespace App\Livewire\Dashboard\Services;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use App\Livewire\Traits\ImageTrait;

use App\Models\Service;

class ListServices extends Component
{
    use ImageTrait;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    public function placeholder()
    {
        return <<<'HTML'
        <div class="text-center my-5 py-5">
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden"></span>
            </div>
        </div>
        HTML;
    }

    #[On('changed-search')]
    public function changedSearch($value)
    {
        $this->resetPage();
        $this->search = $value;
    }

    public function render()
    {
        $services = Service::query();

        if($this->search){
            $services->join('items', 'services.item_id', '=', 'items.id')
                ->where('items.name', 'like', '%' . $this->search . '%');
        }

        return view('livewire.dashboard.services.list-services')->with([
            'services' => $services->with(['item.category'])->paginate(5)
        ]);
    }
}
