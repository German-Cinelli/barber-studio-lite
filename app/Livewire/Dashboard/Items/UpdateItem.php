<?php

namespace App\Livewire\Dashboard\Items;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;
use App\Livewire\Forms\Dashboard\Item\UpdateForm;

use App\Models\Item;

class UpdateItem extends Component
{
    use WithFileUploads;

    public UpdateForm $form;
    public $categories;

    public function mount(Item $item)
    {
        $this->form->setItem($item);
    }

    public function save()
    {
        $this->validate();

        $this->form->update();

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Datos actualizados'
        ]);
    }
}
