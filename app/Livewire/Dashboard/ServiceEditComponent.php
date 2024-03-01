<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

use App\Models\Category;
use App\Models\Service;

#[Title('Editar servicio')]
class ServiceEditComponent extends Component
{
    public $categories = [];
    public $service;

    public function mount($id)
    {
        $this->categories = Category::all();
        $this->service = Service::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.dashboard.service-edit-component')
            ->extends('layouts.dashboard');
    }
}
