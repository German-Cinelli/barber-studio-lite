<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Servicios')]
class ServiceComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.service-component')
            ->extends('layouts.dashboard');
    }
}
