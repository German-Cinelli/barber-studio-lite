<?php

namespace App\Livewire\Forms\Dashboard;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Illuminate\Support\Facades\Redirect;

use Facades\App\Livewire\Actions\Dashboard\Product\CreateProductAction;
use Facades\App\Livewire\Actions\Dashboard\Service\CreateServiceAction;

use Facades\App\Livewire\Services\Dashboard\ImageService;

use App\Models\Item;
use App\Models\Product;
use App\Models\Service;

class ItemForm extends Form // Crearlo con UpdateForm y eliminar ésta clase, ya que se separó la logica del formulario create/update
{
    public ?Item $item;

    #[Rule('required|exists:categories,id', as: 'categoría')]
    public $category_id = '';

    #[Rule('required|max:75|unique:items,name', as: 'nombre')]
    public $name = '';

    #[Rule('required|max:255|alpha_dash|unique:items,slug', as: 'slug')]
    public $slug = '';

    #[Rule('required|numeric|min:1', as: 'precio')]
    public $price = '';

    #[Rule('required|max:75', as: 'descripción')]
    public $description = '';

    #[Rule('required|mimes:jpg,jpeg,png,webp|max:2048', as: 'imagen')]
    public $image = '';

    /**
     * Insertar
     */
    public function store()
    {
        $image = ImageService::upload('storage/items/', $this->image);

        return Item::create([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'slug' => $this->slug,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $image
        ]);
    }

    /**
     * Método para crear
     * producto o servicio
     */
    public function createProductOrService($item, $productType)
    {
        if($productType == 'product'){
            CreateProductAction::handle($item->id);
        }

        if($productType == 'service'){
            $service = CreateServiceAction::handle($item->id);

            return redirect()->route('dashboard.services.edit', ['id' => $service->id]);
        }
    }

    /**
     * Llenar formulario de edición
     */
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

    /**
     * Actualizar
     */
    public function update()
    {
        $this->item->update(
            $this->all()
        );
    }
}
