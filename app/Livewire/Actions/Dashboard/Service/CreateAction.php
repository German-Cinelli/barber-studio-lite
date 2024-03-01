<?php

namespace App\Livewire\Actions\Dashboard\Service;

use App\Models\Service;

class CreateAction
{
    public function handle($id)
    {
        return Service::create([
            'item_id' => $id,
        ]);
    }
}
