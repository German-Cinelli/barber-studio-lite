<?php

namespace App\Livewire\Actions\Dashboard\EmployeeSocial;

use App\Models\EmployeeSocial;

class DeleteAction
{
    public function handle($id)
    {
        return EmployeeSocial::findOrFail($id)->delete();
    }
}
