<?php

namespace App\Livewire\Dashboard\Categories;

use Livewire\Component;
use App\Livewire\Forms\Dashboard\Category\CreateForm;

class CreateCategory extends Component
{
    public CreateForm $form;

    public function save()
    {
        $this->validate();

        $this->form->store();

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Categoría ingresada'
        ]);

        $this->dispatch('closeModal', ['modal' => 'modal-create']);

        $this->dispatch('refresh-categories');
    }
}
