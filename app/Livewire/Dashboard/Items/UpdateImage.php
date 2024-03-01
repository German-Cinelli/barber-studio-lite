<?php

namespace App\Livewire\Dashboard\Items;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Livewire\Traits\ImageTrait;

use App\Livewire\Forms\Dashboard\Item\UpdateImageForm;

class UpdateImage extends Component
{
    use ImageTrait;
    use WithFileUploads;

    public UpdateImageForm $form;

    public $item;

    public function mount($item)
    {
        $this->form->setImage($item->image);
    }

    public function save()
    {
        $this->validate();

        $image = $this->form->update($this->item);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Imagen actualizada'
        ]);
    }
}
