<?php

namespace App\Livewire\Dashboard\Categories;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

use Facades\App\Livewire\Actions\Dashboard\Category\DeleteAction;
use Facades\App\Livewire\Actions\Dashboard\Category\RestoreAction;

use App\Models\Category;

class ListCategories extends Component
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

    public function delete($category_id)
    {
        DeleteAction::handle($category_id);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Categoría eliminada'
        ]);
    }

    public function restore($category_id)
    {
        RestoreAction::handle($category_id);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Categoría restaurada'
        ]);
    }

    #[On('changed-search')]
    public function changedSearch($value)
    {
        $this->resetPage();
        $this->search = $value;
    }

    #[On('refresh-categories')]
    public function render()
    {
        $categories = Category::query();

        if($this->search){
            $categories->where('name', 'like', '%' . $this->search . '%');
        }

        return view('livewire.dashboard.categories.list-categories')->with([
            'categories' => $categories->withTrashed()->paginate(5)
        ]);
    }
}
