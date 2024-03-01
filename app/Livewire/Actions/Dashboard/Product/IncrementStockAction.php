<?php

namespace App\Livewire\Actions\Dashboard\Product;

use App\Models\Product;

class IncrementStockAction
{
    public function handle($item, $quantity)
    {
        $product = Product::where('item_id', $item)->first();

        if($product){
            return $product->increment('stock', $quantity);
        }

        return false;
    }
}
