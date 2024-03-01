<?php

namespace App\Livewire\Actions\Dashboard\Setting;

use App\Models\Setting;

class UpdateBannerAction
{
    public function handle($banner)
    {
        return Setting::firstOrFail()->update([
            'banner' => $banner
        ]);
    }
}
