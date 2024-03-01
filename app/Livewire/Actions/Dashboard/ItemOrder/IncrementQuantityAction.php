<?php

namespace App\Livewire\Actions\Dashboard\ItemOrder;

use App\Models\ItemOrder;

class IncrementQuantityAction
{
    public function handle($id)
    {
        return ItemOrder::findOrFail($id)->increment('quantity');
    }
}
