<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

use App\Models\Employee;

#[Title('Editar empleado')]
class EmployeeEditComponent extends Component
{
    public $employee;

    public function mount($id)
    {
        $this->employee = Employee::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.dashboard.employee-edit-component')
            ->extends('layouts.dashboard');
    }
}
