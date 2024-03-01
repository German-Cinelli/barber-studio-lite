<?php

namespace App\Livewire\Actions\Dashboard\Product;

use App\Models\Product;

class CreateAction
{
    public function handle($id)
    {
        return Product::create([
            'item_id' => $id,
            'long_description' => '<h2>Título</h2><p>Descripción de prueba</p><ul><li>Item 1</li><li>Item 2</li><li>Item 3</li></ul>'
        ]);
    }
}
