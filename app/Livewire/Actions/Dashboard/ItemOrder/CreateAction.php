<?php

namespace App\Livewire\Actions\Dashboard\ItemOrder;

use App\Models\Item;
use App\Models\ItemOrder;

class CreateAction
{
    public function handle($order, $item)
    {
        $itemOrder = ItemOrder::firstOrNew(
            ['order_id' => $order, 'item_id' => $item]
        );

        if (!$itemOrder->exists) {
            $price = Item::where('id', $item)->value('price');

            $itemOrder->price = $price;

            $itemOrder->save();
        }

        return $itemOrder;
    }
}
