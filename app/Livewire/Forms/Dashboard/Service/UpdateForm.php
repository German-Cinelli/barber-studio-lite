<?php

namespace App\Livewire\Forms\Dashboard\Service;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Facades\App\Livewire\Actions\Dashboard\Service\UpdateAction;

use App\Models\Service;

class UpdateForm extends Form
{
    public ?Service $service;

    #[Rule('required|integer|min:5', as: 'duración')]
    public int $duration_time;

    public function setService($service)
    {
        $this->service = $service;
        $this->duration_time = $service->duration_time;
    }

    public function update()
    {
        UpdateAction::handle($this->service->id, $this->duration_time);
    }
}
