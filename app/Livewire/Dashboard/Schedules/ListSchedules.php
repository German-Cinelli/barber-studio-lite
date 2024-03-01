<?php

namespace App\Livewire\Dashboard\Schedules;

use Livewire\Component;

use Facades\App\Livewire\Actions\Dashboard\Schedule\UpdateStatusAction;
use Facades\App\Livewire\Actions\Dashboard\Schedule\UpdateStartTimeAction;
use Facades\App\Livewire\Actions\Dashboard\Schedule\UpdateEndTimeAction;

use App\Models\Schedule;

class ListSchedules extends Component
{
    public $employee;

    public $startTimes = [];
    public $endTimes = [];

    public function mount($employee)
    {
        $this->employee = $employee;

        $schedules = Schedule::where('employee_id', $this->employee->id)->get();
        foreach ($schedules as $schedule) {
            $this->startTimes[$schedule->id] = $schedule->start_time;
            $this->endTimes[$schedule->id] = $schedule->end_time;
        }
    }

    public function changeStatus($schedule)
    {
        UpdateStatusAction::handle($schedule);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Estado modificado'
        ]);
    }

    public function updateStartTime($schedule_id)
    {
        $startTime = $this->startTimes[$schedule_id];
        $endTime = $this->endTimes[$schedule_id];

        /**
         * Comprobamos que no sea inferior a endTime
         */
        if($startTime > $endTime){
            return $this->dispatch('notification-warning', [
                'type' => 'success',
                'title' => 'Acción exitosa!',
                'body' => 'Debe ser inferior a la hora de salida'
            ]);
        }

        UpdateStartTimeAction::handle($schedule_id, $startTime);

        return $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Horario actualizado'
        ]);
    }

    public function updateEndTime($schedule_id)
    {
        $endTime = $this->endTimes[$schedule_id];
        $startTime = $this->startTimes[$schedule_id];

        /**
         * Comprobamos que no sea superior a startTime
         */
        if($endTime < $startTime){
            return $this->dispatch('notification-warning', [
                'type' => 'success',
                'title' => 'Acción exitosa!',
                'body' => 'Debe ser superior a la hora de entrada'
            ]);
        }

        UpdateEndTimeAction::handle($schedule_id, $endTime);

        return $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Horario actualizado'
        ]);
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div class="text-center">
            <div class="spinner-border text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.dashboard.schedules.list-schedules')->with([
            'schedules' => Schedule::where('employee_id', $this->employee->id)->get()
        ]);
    }
}
