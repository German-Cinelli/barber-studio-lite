<?php

namespace App\Livewire\Actions\Dashboard\Sponsor;

use App\Models\Sponsor;

class UpdateAction
{
    public function handle($id, $name, $image)
    {
        return Sponsor::findOrFail($id)->update([
            'name' => $name,
            'image' => $image
        ]);
    }
}
