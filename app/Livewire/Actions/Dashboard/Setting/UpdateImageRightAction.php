<?php

namespace App\Livewire\Actions\Dashboard\Setting;

use App\Models\Setting;

class UpdateImageRightAction
{
    public function handle($image_right)
    {
        return Setting::firstOrFail()->update([
            'image_right' => $image_right
        ]);
    }
}
