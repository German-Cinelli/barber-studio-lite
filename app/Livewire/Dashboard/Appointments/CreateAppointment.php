<?php

namespace App\Livewire\Dashboard\Appointments;

use Livewire\Component;
use App\Livewire\Traits\ImageTrait;

use Facades\App\Livewire\Actions\Dashboard\Schedule\GetScheduleForDayAction;
use Facades\App\Livewire\Actions\Dashboard\Employee\GetAvailableSchedulesAction;
use Facades\App\Livewire\Actions\Dashboard\Appointment\CheckIfTheScheduleIsAvailableAction;

use App\Livewire\Forms\Dashboard\Appointment\CreateForm;

use App\Models\Appointment;
use App\Models\Employee;
use App\Models\Service;

use App\Models\Schedule;

use Illuminate\Support\Collection;

use Carbon\Carbon;

class CreateAppointment extends Component
{
    use ImageTrait;

    public CreateForm $form;

    public $employees = [];
    public $services = [];

    public $durationTime = 0;

    public $availableSchedules = [];

    public function mount()
    {
        $this->employees = Employee::where('status', true)->get();
        $this->services = Service::with('item')
            ->whereHas('item', function ($query) {
                $query->where('status', true);
            })->get();
    }

    public function changeEmployee()
    {
        $this->getAppointments();
    }

    public function changeDate()
    {
        $this->getAppointments();
    }

    public function toggleService()
    {
        $this->durationTime = Service::whereIn('id', $this->form->services)->sum('duration_time');
        $this->getAppointments();
    }

    private function getAppointments()
    {
        if($this->form->services && $this->form->employee_id && $this->form->date){

            $day = Carbon::parse($this->form->date);

            $schedule = GetScheduleForDayAction::handle($this->form->employee_id, $day);

            if(!$schedule){
                $this->availableSchedules = [];

                return $this->dispatch('notification-warning', [
                    'type' => 'warning',
                    'title' => 'Atención!',
                    'body' => 'El empleado no trabaja el día ' . $day->dayName
                ]);
            }

            $this->availableSchedules = GetAvailableSchedulesAction::handle($this->form->employee_id, $this->form->date, $schedule, $this->durationTime);
        }
    }

    public function save()
    {
        $this->validate();

        /**
         * Checkeamos nuevamente que el horario esté disponible
         */
        $check = CheckIfTheScheduleIsAvailableAction::handle($this->form->employee_id, $this->form->date, $this->form->time, $this->durationTime);
        //dd($check);
        if(!$check){
            return $this->dispatch('notification-warning', [
                'type' => 'warning',
                'title' => 'Atención!',
                'body' => 'El horario seleccionado no se encuentra disponible.'
            ]);
        }

        $this->form->store($this->durationTime);

        $this->reset(['durationTime', 'availableSchedules']);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Agenda ingresada'
        ]);
    }
}
