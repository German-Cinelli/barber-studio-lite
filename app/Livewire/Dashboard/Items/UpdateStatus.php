<?php

namespace App\Livewire\Dashboard\Items;

use Livewire\Component;

use App\Livewire\Forms\Dashboard\Item\UpdateStatusForm;

use App\Models\Item;

class UpdateStatus extends Component
{
    public UpdateStatusForm $form;

    public $item;

    public function changeStatus()
    {
        $this->form->update($this->item);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Estado modificado'
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.items.update-status')->with([
            'status' => Item::findOrFail($this->item->id)->status
        ]);
    }
}
