<?php

namespace App\Livewire\Dashboard\Appointments;

use Livewire\Component;
use App\Livewire\Forms\Dashboard\Appointment\CreateSimpleForm;

class CreateSimpleAppointment extends Component
{
    public CreateSimpleForm $form;

    public function save()
    {
        $this->validate();

        $this->form->store();

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Agenda ingresada'
        ]);

        $this->dispatch('refresh-appointments');
    }
}
