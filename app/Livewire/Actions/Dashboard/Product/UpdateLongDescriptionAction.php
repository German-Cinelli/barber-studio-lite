<?php

namespace App\Livewire\Actions\Dashboard\Product;

use App\Models\Product;

class UpdateLongDescriptionAction
{
    public function handle($id, $long_description)
    {
        return Product::findOrFail($id)->update([
            'long_description' => $long_description
        ]);
    }
}
