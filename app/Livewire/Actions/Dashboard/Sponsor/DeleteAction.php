<?php

namespace App\Livewire\Actions\Dashboard\Sponsor;

use App\Models\Sponsor;

class DeleteAction
{
    public function handle($id)
    {
        return Sponsor::findOrFail($id)->delete();
    }
}
