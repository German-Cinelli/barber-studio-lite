<?php

namespace App\Livewire\Forms\Dashboard;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Facades\App\Livewire\Actions\Dashboard\Service\UpdateServiceAction;

use App\Models\Service;

class ServiceForm extends Form
{
    public Service $service;

    #[Rule('required|integer|min:5')]
    public $duration_time = '';

    public function setService(Service $service)
    {
        $this->service = $service;
        $this->duration_time = $service->duration_time;
    }

    public function update()
    {
        $this->service->update(
            $this->all()
        );
    }
}
