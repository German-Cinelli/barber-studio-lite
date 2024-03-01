<?php

namespace App\Livewire\Forms\Dashboard\Employee;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Facades\App\Livewire\Actions\Dashboard\Employee\UpdateStatusAction;

class UpdateStatusForm extends Form
{
    public ?Employee $employee;

    public function update($employee)
    {
        UpdateStatusAction::handle($employee->id);
    }
}
