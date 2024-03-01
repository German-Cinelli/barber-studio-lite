<?php

namespace App\Livewire\Actions\Dashboard\Image;

use App\Models\Image;

class DeleteAction
{
    public function handle($id)
    {
        return Image::findOrFail($id)->delete();
    }
}
