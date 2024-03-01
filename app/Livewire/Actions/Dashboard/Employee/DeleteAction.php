<?php

namespace App\Livewire\Actions\Dashboard\Employee;

use App\Models\Employee;

class DeleteAction
{
    public function handle($id)
    {
        return Employee::findOrFail($id)->delete();
    }
}
