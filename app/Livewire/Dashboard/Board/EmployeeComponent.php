<?php

namespace App\Livewire\Dashboard\Board;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Livewire\Traits\ImageTrait;

use Facades\App\Livewire\Actions\Dashboard\Appointment\FinishAppointmentAction;


use App\Models\Appointment;

use App\Models\Employee;

class EmployeeComponent extends Component
{
    use ImageTrait;

    public function finishAppointment(Appointment $appointment)
    {
        FinishAppointmentAction::handle($appointment->id);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Atencion al cliente finalizada'
        ]);
    }

    #[On('refresh-employees')]
    public function render()
    {
        $employees = Employee::with('serving')->get();

        foreach ($employees as $employee) {
            if($employee->serving){
                $employee->start_time_js = \Carbon\Carbon::parse($employee->serving->start_time)->format('Y-m-d H:i:s');
                $employee->end_time_js = \Carbon\Carbon::parse($employee->serving->end_time)->format('Y-m-d H:i:s');
            }
        }

        return view('livewire.dashboard.board.employee-component')->with([
            'employees' => $employees
        ]);
    }
}
