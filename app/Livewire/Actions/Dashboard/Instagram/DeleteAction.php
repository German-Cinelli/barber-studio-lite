<?php

namespace App\Livewire\Actions\Dashboard\Instagram;

use App\Models\InstagramFeed;

class DeleteAction
{
    public function handle($id)
    {
        return InstagramFeed::findOrFail($id)->delete();
    }
}
