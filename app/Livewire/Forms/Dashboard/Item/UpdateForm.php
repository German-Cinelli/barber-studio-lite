<?php

namespace App\Livewire\Forms\Dashboard\Item;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Facades\App\Livewire\Actions\Dashboard\Item\UpdateAction;

use App\Models\Item;

class UpdateForm extends Form
{
    public ?Item $item;

    #[Rule('required|exists:categories,id', as: 'categoría')]
    public int $category_id;

    public string $name;

    public string $slug;

    #[Rule('required|numeric|min:1', as: 'precio')]
    public int $price;

    #[Rule('required|max:255', as: 'descripción')]
    public string $description;

    public function rules()
    {
        return [
            'name' => 'required|max:75|unique:items,name,' . $this->item->id,
            'slug' => 'required|max:255|alpha_dash|unique:items,slug,' . $this->item->id
        ];
    }

    public function validationAttributes()
    {
        return [
            'category_id' => 'categoría',
            'name' => 'nombre',
            'slug' => 'slug',
            'price' => 'precio',
            'description' => 'descripción'
        ];
    }

    public function setItem(Item $item)
    {
        $this->item = $item;
        $this->name = $item->name;
        $this->slug = $item->slug;
        $this->category_id = $item->category_id;
        $this->price = $item->price;
        $this->description = $item->description;
        $this->image = $item->image;
    }

    public function update()
    {
        UpdateAction::handle($this->item->id, $this->category_id, $this->name, $this->slug, $this->price, $this->description);
    }
}
