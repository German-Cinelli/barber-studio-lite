<?php

namespace App\Livewire\Forms\Dashboard\Category;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Facades\App\Livewire\Actions\Dashboard\Category\CreateAction;

class CreateForm extends Form
{
    public ?Category $category;

    #[Rule('required|string|max:75|unique:categories,name', as: 'nombre')]
    public string $name = '';

    #[Rule('required|string|max:255|alpha_dash|unique:categories,slug', as: 'slug')]
    public string $slug = '';

    public function store()
    {
        CreateAction::handle($this->name, $this->slug);
        $this->reset();
    }
}
