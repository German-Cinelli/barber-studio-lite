<?php

namespace App\Livewire\Actions\Dashboard\Item;

use App\Models\Item;

class CreateAction
{
    public function handle($category_id, $name, $slug, $price, $description, $image)
    {
        return Item::create([
            'category_id' => $category_id,
            'name' => $name,
            'slug' => $slug,
            'price' => $price,
            'description' => $description,
            'image' => $image
        ]);
    }
}
