<?php

namespace App\Livewire\Forms\Dashboard\Item;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Facades\App\Livewire\Services\Dashboard\ImageService;
use Facades\App\Livewire\Actions\Dashboard\Item\UpdateImageAction;

class UpdateImageForm extends Form
{
    public ?Item $item;

    #[Rule('required|mimes:jpg,jpeg,png,webp|max:2048', as: 'imagen')]
    public $image = '';

    public $currentImage = '';

    public function setImage($currentImage)
    {
        $this->currentImage = $currentImage;
    }

    public function update($item)
    {
        $image = ImageService::upload('storage/items/', $this->image);
        UpdateImageAction::handle($item->id, $image);
        $this->reset('image');
        $this->currentImage = $image;
        return $image;
    }
}
