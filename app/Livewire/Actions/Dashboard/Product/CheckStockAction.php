<?php

namespace App\Livewire\Actions\Dashboard\Product;

use App\Models\Product;

class CheckStockAction
{
    /**
     * @param $item
     * @param $currentQuantity: Cantidad actual en el ticket
     */
    public function handle($item, $quantity)
    {
        $product = Product::where('item_id', $item)->first();

        return !$product || $product->stock >= $quantity;
    }
}
