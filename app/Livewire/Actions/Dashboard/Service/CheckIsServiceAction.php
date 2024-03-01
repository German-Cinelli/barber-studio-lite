<?php

namespace App\Livewire\Actions\Dashboard\Service;

use App\Models\Service;

class CheckIsServiceAction
{
    public function handle($item_id)
    {
        return Service::where('item_id', $item_id)->exists();
    }
}
