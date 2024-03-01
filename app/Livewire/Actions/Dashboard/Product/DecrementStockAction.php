<?php

namespace App\Livewire\Actions\Dashboard\Product;

use App\Models\Product;

class DecrementStockAction
{
    /**
     * @param $order
     */
    public function handle($order)
    {
        $itemIds = $order->items->pluck('item_id');

        Product::whereIn('item_id', $itemIds)->each(function ($product) use ($order) {
            $item = $order->items->firstWhere('item_id', $product->item_id);

            if ($item) {
                $product->decrement('stock', $item->quantity);
            }
        });
    }
}
