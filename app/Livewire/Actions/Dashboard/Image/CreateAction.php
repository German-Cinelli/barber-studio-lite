<?php

namespace App\Livewire\Actions\Dashboard\Image;

use App\Models\Image;

class CreateAction
{
    public function handle($product_id, $image)
    {
        return Image::create([
            'product_id' => $product_id,
            'image' => $image
        ]);
    }
}
