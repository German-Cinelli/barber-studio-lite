<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Tablero')]
class BoardComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.board-component')
            ->extends('layouts.dashboard');
    }
}
