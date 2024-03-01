<?php

namespace App\Livewire\Dashboard\Employees;

use Livewire\Component;

use App\Livewire\Forms\Dashboard\Employee\UpdateStatusForm;

use App\Models\Employee;

class UpdateStatus extends Component
{
    public UpdateStatusForm $form;

    public $employee;

    public function changeStatus()
    {
        $this->form->update($this->employee);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Estado modificado'
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.employees.update-status')->with([
            'status' => Employee::findOrFail($this->employee->id)->status
        ]);
    }
}
