<?php

namespace App\Livewire\Actions\Dashboard\Employee;

use App\Models\Employee;

class RestoreAction
{
    public function handle($id)
    {
        return Employee::withTrashed()->findOrFail($id)->restore();
    }
}
