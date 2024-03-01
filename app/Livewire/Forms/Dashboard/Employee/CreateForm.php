<?php

namespace App\Livewire\Forms\Dashboard\Employee;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Illuminate\Support\Facades\Redirect;

use Facades\App\Livewire\Actions\Dashboard\Employee\CreateAction;
use Facades\App\Livewire\Actions\Dashboard\PersonalInformation\CreateAction as CreatePersonalInformationAction;
use Facades\App\Livewire\Actions\Dashboard\Schedule\CreateAction as CreateScheduleAction;

use Facades\App\Livewire\Services\Dashboard\ImageService;

use App\Models\Employee;

class CreateForm extends Form
{
    public ?Employee $employee;

    #[Rule('required|string|max:75', as: 'nombre')]
    public string $name;

    #[Rule('required|string|max:30', as: 'descripción')]
    public string $description;

    #[Rule('required|mimes:jpg,jpeg,png,webp|max:2048', as: 'avatar')]
    public $image = '';

    public function store()
    {
        $image = ImageService::upload('storage/employees/', $this->image);

        $employee = CreateAction::handle($this->name, $this->description, $image);

        $this->createPersonalInformation($employee);

        $this->createSchedules($employee);

        return redirect()->route('dashboard.employees.edit', ['id' => $employee->id])
            ->with('success', 'Añadido con éxito!');
    }

    public function createPersonalInformation($employee)
    {
        CreatePersonalInformationAction::handle($employee->id);
    }

    public function createSchedules($employee)
    {
        CreateScheduleAction::handle($employee->id);
    }
}
