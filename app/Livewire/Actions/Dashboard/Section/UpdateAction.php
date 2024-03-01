<?php

namespace App\Livewire\Actions\Dashboard\Section;

use App\Models\Section;

class UpdateAction
{
    public function handle($field, $value)
    {
        return Section::first()->update([
            $field => $value
        ]);
    }
}
