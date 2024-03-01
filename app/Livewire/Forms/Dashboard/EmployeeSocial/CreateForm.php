<?php

namespace App\Livewire\Forms\Dashboard\EmployeeSocial;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Facades\App\Livewire\Actions\Dashboard\EmployeeSocial\CreateAction;

use App\Models\Employee;

class CreateForm extends Form
{
    public ?Employee $employee;

    #[Rule('required|exists:socials,id', as: 'red social')]
    public $social_id;

    #[Rule('required|url', as: 'enlace')]
    public string $href = '';

    public function setEmployee($employee)
    {
        $this->employee = $employee;
    }

    public function store()
    {
        CreateAction::handle($this->employee->id, $this->social_id, $this->href);
        $this->reset(['social_id', 'href']);
    }
}
