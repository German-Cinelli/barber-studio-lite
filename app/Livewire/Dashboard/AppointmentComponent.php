<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Agenda')]
class AppointmentComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.appointment-component')
            ->extends('layouts.dashboard');
    }
}
