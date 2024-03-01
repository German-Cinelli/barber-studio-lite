<?php

namespace App\Livewire\Actions\Dashboard\Employee;

use App\Models\Employee;

class UpdateStatusAction
{
    public function handle($id)
    {
        $employee = Employee::findOrFail($id);

        return $employee->update([
            'status' => !$employee->status
        ]);
    }
}
