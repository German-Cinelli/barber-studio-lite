<?php

namespace App\Livewire\Actions\Dashboard\Setting;

use App\Models\Setting;

class UpdateWhatsappAction
{
    public function handle($whatsapp)
    {
        return Setting::firstOrFail()->update([
            'whatsapp' => $whatsapp
        ]);
    }
}
