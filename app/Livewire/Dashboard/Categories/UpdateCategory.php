<?php

namespace App\Livewire\Dashboard\Categories;

use Livewire\Component;
use Livewire\Attributes\On;

use App\Livewire\Forms\Dashboard\Category\UpdateForm;

use App\Models\Category;

class UpdateCategory extends Component
{
    public UpdateForm $form;

    #[On('edit-category')]
    public function edit(Category $category)
    {
        $this->form->setCategory($category);
    }

    public function save()
    {
        $this->validate();

        $this->form->update();

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Categoría actualizada'
        ]);

        $this->dispatch('closeModal', ['modal' => 'modal-update']);

        $this->dispatch('refresh-categories');
    }
}
