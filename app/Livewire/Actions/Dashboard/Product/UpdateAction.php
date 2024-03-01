<?php

namespace App\Livewire\Actions\Dashboard\Product;

use App\Models\Product;

class UpdateAction
{
    public function handle($id, $stock, $stock_alert)
    {
        return Product::findOrFail($id)->update([
            'stock' => $stock,
            'stock_alert' => $stock_alert
        ]);
    }
}
