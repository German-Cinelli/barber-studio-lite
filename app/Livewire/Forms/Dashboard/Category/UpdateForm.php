<?php

namespace App\Livewire\Forms\Dashboard\Category;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Illuminate\Support\Facades\Validator;

use Facades\App\Livewire\Actions\Dashboard\Category\UpdateAction;

use App\Models\Category;

class UpdateForm extends Form
{
    public ?Category $category;

    public string $name = '';

    public string $slug = '';

    public function rules()
    {
        return [
            'name' => 'required|max:75|unique:categories,name,' . $this->category->id,
            'slug' => 'required|max:255|alpha_dash|unique:categories,slug,' . $this->category->id,
        ];
    }

    public function validationAttributes()
    {
        return [
            'name' => 'nombre',
            'slug' => 'slug'
        ];
    }

    public function setCategory($category)
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->slug = $category->slug;
    }

    public function update()
    {
        UpdateAction::handle($this->category->id, $this->name, $this->slug);
        $this->reset();
    }
}
