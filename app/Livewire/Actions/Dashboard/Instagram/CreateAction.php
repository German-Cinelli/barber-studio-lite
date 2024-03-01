<?php

namespace App\Livewire\Actions\Dashboard\Instagram;

use App\Models\InstagramFeed;

class CreateAction
{
    public function handle($content)
    {
        return InstagramFeed::create([
            'content' => $content
        ]);
    }
}
