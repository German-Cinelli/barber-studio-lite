<?php

namespace App\Livewire\Actions\Dashboard\ItemOrder;

use App\Models\ItemOrder;

class CreateManyAction
{
    public function handle($order_id, $appointment_services)
    {
        foreach($appointment_services as $service){
            ItemOrder::create([
                'item_id' => $service->item_id,
                'order_id' => $order_id,
                'price' => $service->item->price
            ]);
        }

        return false;
    }
}
