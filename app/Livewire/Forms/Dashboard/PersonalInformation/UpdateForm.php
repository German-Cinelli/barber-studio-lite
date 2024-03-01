<?php

namespace App\Livewire\Forms\Dashboard\PersonalInformation;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Facades\App\Livewire\Actions\Dashboard\PersonalInformation\UpdateAction;

use App\Models\PersonalInformation;

class UpdateForm extends Form
{
    public ?PersonalInformation $personal_information;

    #[Rule('nullable|string|max:15', as: 'documento de identidad')]
    public $document;

    #[Rule('nullable|string|max:75', as: 'localidad')]
    public $location;

    #[Rule('nullable|string|max:75', as: 'dirección')]
    public $address;

    #[Rule('nullable|string|max:25', as: 'teléfono')]
    public $phone;

    public function setPersonalInformation(PersonalInformation $personal_information)
    {
        $this->personal_information = $personal_information;
        $this->document = $personal_information->document;
        $this->location = $personal_information->location;
        $this->address = $personal_information->address;
        $this->phone = $personal_information->phone;
    }

    public function update()
    {
        UpdateAction::handle($this->personal_information->id, $this->document, $this->location, $this->address, $this->phone);
    }
}
