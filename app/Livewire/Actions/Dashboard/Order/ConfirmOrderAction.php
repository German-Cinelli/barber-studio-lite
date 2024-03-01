<?php

namespace App\Livewire\Actions\Dashboard\Order;

use App\Models\Order;

class ConfirmOrderAction
{
    public function handle($order)
    {
        return Order::findOrFail($order)->update([
            'payment_status' => true
        ]);
    }
}
