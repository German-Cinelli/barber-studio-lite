<?php

namespace App\Livewire\Actions\Dashboard\Service;

use App\Models\Service;

class UpdateAction
{
    public function handle($id, $duration_time)
    {
        return Service::findOrFail($id)->update([
            'duration_time' => $duration_time
        ]);
    }
}
