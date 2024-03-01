<?php

namespace App\Livewire\Actions\Dashboard\Setting;

use App\Models\Setting;

class UpdateFieldAction
{
    public function handle($field, $value)
    {
        return Setting::first()->update([
            $field => $value
        ]);
    }
}
