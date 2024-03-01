<?php

namespace App\Livewire\Actions\Dashboard\Category;

use App\Models\Category;

class CreateAction
{
    public function handle($name, $slug)
    {
        return Category::create([
            'name' => $name,
            'slug' => $slug
        ]);
    }
}
