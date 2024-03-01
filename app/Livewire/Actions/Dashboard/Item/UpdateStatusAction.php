<?php

namespace App\Livewire\Actions\Dashboard\Item;

use App\Models\Item;

class UpdateStatusAction
{
    public function handle($id)
    {
        $item = Item::findOrFail($id);

        return $item->update([
            'status' => !$item->status
        ]);
    }
}
