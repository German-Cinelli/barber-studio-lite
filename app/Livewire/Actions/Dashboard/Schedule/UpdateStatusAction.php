<?php

namespace App\Livewire\Actions\Dashboard\Schedule;

use App\Models\Schedule;

class UpdateStatusAction
{
    public function handle($id)
    {
        $schedule = Schedule::findOrFail($id);

        return $schedule->update([
            'status' => !$schedule->status
        ]);
    }
}
