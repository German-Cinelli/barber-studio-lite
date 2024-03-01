<?php

namespace App\Livewire\Actions\Dashboard\Order;

use App\Models\Order;

class CreateAction
{
    public function handle($customer_id, $name)
    {
        return Order::create([
            'customer_id' => $customer_id,
            'name' => $name
        ]);
    }
}
