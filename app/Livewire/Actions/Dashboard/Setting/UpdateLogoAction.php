<?php

namespace App\Livewire\Actions\Dashboard\Setting;

use App\Models\Setting;

class UpdateLogoAction
{
    public function handle($logo)
    {
        return Setting::firstOrFail()->update([
            'logo' => $logo
        ]);
    }
}
