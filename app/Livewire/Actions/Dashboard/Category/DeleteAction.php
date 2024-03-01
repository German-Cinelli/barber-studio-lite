<?php

namespace App\Livewire\Actions\Dashboard\Category;

use App\Models\Category;

class DeleteAction
{
    public function handle($id)
    {
        return Category::findOrFail($id)->delete();
    }
}
