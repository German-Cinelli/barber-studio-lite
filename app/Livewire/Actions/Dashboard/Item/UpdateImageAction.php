<?php

namespace App\Livewire\Actions\Dashboard\Item;

use App\Models\Item;

class UpdateImageAction
{
    public function handle($id, $image)
    {
        return Item::findOrFail($id)->update([
            'image' => $image
        ]);
    }
}
