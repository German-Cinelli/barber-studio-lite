<?php

namespace App\Livewire\Actions\Dashboard\Category;

use App\Models\Category;

class RestoreAction
{
    public function handle($id)
    {
        return Category::withTrashed()->findOrFail($id)->restore();
    }
}
