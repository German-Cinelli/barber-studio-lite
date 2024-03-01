<?php

namespace App\Livewire\Actions\Dashboard\ItemOrder;

use App\Models\ItemOrder;

class DecrementQuantityAction
{
    public function handle($id)
    {
        $item_order = ItemOrder::findOrFail($id);

        if($item_order->quantity <= 1){
            return false;
        }

        return $item_order->decrement('quantity');
    }
}
