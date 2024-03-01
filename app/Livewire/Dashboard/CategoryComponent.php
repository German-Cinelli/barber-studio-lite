<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Categorías')]
class CategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.category-component')
            ->extends('layouts.dashboard');
    }
}
