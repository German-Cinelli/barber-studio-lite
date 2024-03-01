<?php

namespace App\Livewire\Dashboard\Employees;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Livewire\Forms\Dashboard\Employee\CreateForm;

class CreateEmployee extends Component
{
    public CreateForm $form;

    use WithFileUploads;

    public function save()
    {
        $this->validate();

        $this->form->store();
    }
}
