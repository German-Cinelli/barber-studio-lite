<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Usuarios')]
class UserComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.user-component')
            ->extends('layouts.dashboard');
    }
}
