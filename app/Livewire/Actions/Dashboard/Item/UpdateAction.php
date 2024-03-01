<?php

namespace App\Livewire\Actions\Dashboard\Item;

use App\Models\Item;

class UpdateAction
{
    public function handle($id, $category_id, $name, $slug, $price, $description)
    {
        return Item::findOrFail($id)->update([
            'category_id' => $category_id,
            'name' => $name,
            'slug' => $slug,
            'price' => $price,
            'description' => $description
        ]);
    }
}
