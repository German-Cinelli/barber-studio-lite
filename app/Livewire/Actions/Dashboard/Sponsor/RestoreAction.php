<?php

namespace App\Livewire\Actions\Dashboard\Sponsor;

use App\Models\Sponsor;

class RestoreAction
{
    public function handle($id)
    {
        return Sponsor::withTrashed()
            ->findOrFail($id)
            ->restore();
    }
}
