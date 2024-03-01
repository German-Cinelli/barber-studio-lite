<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Empleados')]
class EmployeeComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.employee-component')
            ->extends('layouts.dashboard');
    }
}
