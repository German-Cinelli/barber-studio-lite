<?php

namespace App\Livewire\Dashboard\Users;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

use App\Models\User;

class ListUsers extends Component
{
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

    #[On('refresh-users')]
    public function render()
    {
        $users = User::query();

        if($this->search){
            $users->where('name', 'like', '%' . $this->search . '%');
        }

        return view('livewire.dashboard.users.list-users')->with([
            'users' => $users->paginate(5)
        ]);
    }
}
