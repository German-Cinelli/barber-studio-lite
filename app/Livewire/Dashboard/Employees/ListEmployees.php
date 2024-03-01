<?php

namespace App\Livewire\Dashboard\Employees;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use App\Livewire\Traits\ImageTrait;

use App\Models\Employee;

class ListEmployees extends Component
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
        $employees = Employee::query();

        if($this->search){
            $employees->where('name', 'like', '%' . $this->search . '%');
        }

        return view('livewire.dashboard.employees.list-employees')->with([
            'employees' => $employees->paginate(5)
        ]);
    }
}
