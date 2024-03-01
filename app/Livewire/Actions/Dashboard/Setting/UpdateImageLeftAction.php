<?php

namespace App\Livewire\Actions\Dashboard\Setting;

use App\Models\Setting;

class UpdateImageLeftAction
{
    public function handle($image_left)
    {
        return Setting::firstOrFail()->update([
            'image_left' => $image_left
        ]);
    }
}
