<?php

namespace App\Livewire\Actions\Dashboard\Setting;

use App\Models\Setting;

class UpdateEmbeddedContentMapAction
{
    public function handle($embedded_content_map)
    {
        return Setting::firstOrFail()->update([
            'embedded_content_map' => $embedded_content_map
        ]);
    }
}
