<?php

namespace App\Livewire\Actions\Dashboard\Category;

use App\Models\Category;

class UpdateAction
{
    public function handle($id, $name, $slug)
    {
        return Category::findOrFail($id)->update([
            'name' => $name,
            'slug' => $slug
        ]);
    }
}
