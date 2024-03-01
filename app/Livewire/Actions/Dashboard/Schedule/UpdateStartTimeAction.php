<?php

namespace App\Livewire\Actions\Dashboard\Schedule;

use App\Models\Schedule;

class UpdateStartTimeAction
{
    public function handle($id, $start_time)
    {
        return Schedule::findOrFail($id)->update([
            'start_time' => $start_time
        ]);
    }
}
