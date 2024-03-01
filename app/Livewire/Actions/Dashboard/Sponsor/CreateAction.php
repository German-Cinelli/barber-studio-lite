<?php

namespace App\Livewire\Actions\Dashboard\Sponsor;

use App\Models\Sponsor;

class CreateAction
{
    public function handle($name, $image)
    {
        return Sponsor::create([
            'name' => $name,
            'image' => $image
        ]);
    }
}
