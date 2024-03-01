<?php

namespace App\Livewire\Dashboard\EmployeeSocial;

use Livewire\Component;
use App\Livewire\Forms\Dashboard\EmployeeSocial\CreateForm;

use App\Models\Employee;
use App\Models\Social;

class CreateEmployeeSocial extends Component
{
    public $socials;

    public CreateForm $form;

    public function mount($employee)
    {
        $this->form->setEmployee($employee);
        $this->socials = Social::all();
    }

    public function save()
    {
        $this->validate();

        $this->form->store();

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Enlace ingresado'
        ]);

        $this->dispatch('refresh-employee-social');
    }
}
