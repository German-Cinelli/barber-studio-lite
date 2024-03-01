<?php

namespace App\Livewire\Actions\Dashboard\Section;

use App\Models\Section;

class UpdateShowSectionAction
{
    public function handle($field)
    {
        $section = Section::first();

        return $section->update([
            $field => !$section->$field
        ]);
    }
}
