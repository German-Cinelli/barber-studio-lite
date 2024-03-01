<?php

namespace App\Livewire\Actions\Dashboard\Order;

use App\Models\Order;

class DeleteAction
{
    public function handle($order)
    {
        return Order::findOrFail($order)->delete();
    }
}
