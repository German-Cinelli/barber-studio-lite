<?php

namespace App\Livewire\Dashboard\Services;

use Livewire\Component;
use App\Livewire\Forms\Dashboard\Service\UpdateForm;

use App\Models\Service;

class UpdateService extends Component
{
    public UpdateForm $form;

    public function mount(Service $service)
    {
        $this->form->setService($service);
    }

    public function update()
    {
        $this->validate();

        $this->form->update();

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Duración actualizada'
        ]);
    }
}
