<?php

namespace App\Livewire\Actions\Dashboard\Schedule;

use App\Models\Schedule;

class UpdateEndTimeAction
{
    public function handle($id, $end_time)
    {
        return Schedule::findOrFail($id)->update([
            'end_time' => $end_time
        ]);
    }
}
