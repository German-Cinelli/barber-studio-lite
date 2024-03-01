<?php

namespace App\Livewire\Forms\Dashboard\Employee;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Facades\App\Livewire\Actions\Dashboard\Employee\UpdateAction;

use Facades\App\Livewire\Services\Dashboard\ImageService;

use App\Models\Employee;

class UpdateForm extends Form
{
    public ?Employee $employee;

    #[Rule('required|string|max:75', as: 'nombre')]
    public string $name;

    #[Rule('required|string|max:30', as: 'descripción')]
    public string $description;

    #[Rule('nullable|mimes:jpg,jpeg,png,webp|max:2048', as: 'avatar')]
    public $image = '';

    public $currentImage;

    public function setEmployee($employee)
    {
        $this->employee = $employee;
        $this->name = $employee->name;
        $this->description = $employee->description;
        $this->currentImage = $employee->image;
    }

    public function update()
    {
        $image = $this->employee->image;

        if($this->image){
            $image = ImageService::upload('storage/employees/', $this->image);
        }

        UpdateAction::handle($this->employee->id, $this->name, $this->description, $image);

        $this->reset('image');

        $this->currentImage = $image;

    }
}
