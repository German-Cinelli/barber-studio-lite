<?php

namespace App\Livewire\Actions\Dashboard\Setting;

use App\Models\Setting;

class UpdateImageParallaxAction
{
    public function handle($image_parallax)
    {
        return Setting::firstOrFail()->update([
            'image_parallax' => $image_parallax
        ]);
    }
}
