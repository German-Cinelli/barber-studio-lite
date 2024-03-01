<?php

namespace App\Livewire\Forms\Dashboard\Appointment;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Facades\App\Livewire\Actions\Dashboard\Appointment\CreateAction;

class CreateSimpleForm extends Form
{
    #[Rule('required|string|max:75', as: 'nombre')]
    public string $name = '';

    public int $type_id = 1;

    public function store()
    {
        CreateAction::handle($this->name, $this->type_id);
        $this->reset();
    }
}
