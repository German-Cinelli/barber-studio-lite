<?php

namespace App\Livewire\Actions\Dashboard\Product;

use App\Models\Product;

class SufficientStockAction
{
    /**
     * @param $item
     * @param $currentQuantity: Cantidad actual en el ticket
     */
    public function handle($item, $currentQuantity = 0)
    {
        $product = Product::where('item_id', $item)->first();

        /**
         * Si no encuentra un producto, o su stock
         * es superior a cero devuelve true
         */
        return !$product || $product->stock > $currentQuantity;
    }
}
