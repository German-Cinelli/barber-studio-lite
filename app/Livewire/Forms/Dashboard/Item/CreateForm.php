<?php

namespace App\Livewire\Forms\Dashboard\Item;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Illuminate\Support\Facades\Redirect;

use Facades\App\Livewire\Actions\Dashboard\Item\CreateAction;

use Facades\App\Livewire\Actions\Dashboard\Product\CreateAction as CreateProductAction;
use Facades\App\Livewire\Actions\Dashboard\Service\CreateAction as CreateServiceAction;

use Facades\App\Livewire\Services\Dashboard\ImageService;

use App\Models\Item;
use App\Models\Product;
use App\Models\Service;

class CreateForm extends Form
{
    public ?Item $item;

    #[Rule('required|exists:categories,id', as: 'categoría')]
    public int $category_id;

    #[Rule('required|in:product,service', as: 'tipo')]
    public string $itemType;

    #[Rule('required|max:75|unique:items,name', as: 'nombre')]
    public string $name;

    #[Rule('required|max:255|alpha_dash|unique:items,slug', as: 'slug')]
    public string $slug;

    #[Rule('required|numeric|min:1', as: 'precio')]
    public int $price;

    #[Rule('required|max:255', as: 'descripción')]
    public string $description;

    #[Rule('required|mimes:jpg,jpeg,png,webp|max:2048', as: 'imagen')]
    public $image = '';

    /**
     * Insertar
     */
    public function store()
    {
        $image = ImageService::upload('storage/items/', $this->image);

        $item = CreateAction::handle($this->category_id, $this->name, $this->slug, $this->price, $this->description, $image);

        $this->createProductOrService($item, $this->itemType);
    }

    /**
     * Método para crear
     * producto o servicio
     */
    public function createProductOrService($item, $itemType)
    {
        if($itemType == 'product'){
            $product = CreateProductAction::handle($item->id);

            return redirect()
                ->route('dashboard.products.edit', ['id' => $product->id])
                ->with('success', 'Añadido con éxito!');
        }

        if($itemType == 'service'){
            $service = CreateServiceAction::handle($item->id);

            return redirect()
                ->route('dashboard.services.edit', ['id' => $service->id])
                ->with('success', 'Añadido con éxito!');
        }
    }
}
