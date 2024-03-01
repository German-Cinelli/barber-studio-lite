<?php

namespace App\Livewire\Actions\Dashboard\ItemOrder;

use App\Models\ItemOrder;

class DeleteAction
{
    public function handle($id)
    {
        return ItemOrder::findOrFail($id)->delete();
    }
}
