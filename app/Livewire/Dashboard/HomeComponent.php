<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Inicio')]
class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.home-component')
            ->extends('layouts.dashboard');
    }
}
