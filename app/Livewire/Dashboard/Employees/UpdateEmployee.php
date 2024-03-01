<?php

namespace App\Livewire\Dashboard\Employees;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;

use App\Livewire\Traits\ImageTrait;

use App\Livewire\Forms\Dashboard\Employee\UpdateForm;

use App\Models\Employee;

class UpdateEmployee extends Component
{
    use ImageTrait;
    use WithFileUploads;

    public UpdateForm $form;

    public function mount(Employee $employee)
    {
        $this->form->setEmployee($employee);
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
