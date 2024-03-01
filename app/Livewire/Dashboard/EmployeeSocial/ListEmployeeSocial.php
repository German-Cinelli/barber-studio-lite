<?php

namespace App\Livewire\Dashboard\EmployeeSocial;

use Livewire\Component;
use Livewire\Attributes\On;

use Facades\App\Livewire\Actions\Dashboard\EmployeeSocial\DeleteAction;

use App\Models\Employee;

class ListEmployeeSocial extends Component
{
    public $employee;

    public function mount($employee)
    {
        $this->employee = $employee;
    }

    public function delete($id)
    {
        DeleteAction::handle($id);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Enlace removido'
        ]);
    }

    #[On('refresh-employee-social')]
    public function render()
    {
        return view('livewire.dashboard.employee-social.list-employee-social')->with([
            'employee_socials' => Employee::findOrFail($this->employee)->socials
        ]);
    }
}
