<?php

namespace App\Livewire\Dashboard\PersonalInformation;

use Livewire\Component;

use App\Livewire\Forms\Dashboard\PersonalInformation\UpdateForm;

class UpdatePersonalInformation extends Component
{
    public UpdateForm $form;

    public function mount($employee)
    {
        $this->form->setPersonalInformation($employee->personal_information);
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
