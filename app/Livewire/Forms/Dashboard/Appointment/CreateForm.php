<?php

namespace App\Livewire\Forms\Dashboard\Appointment;

use Livewire\Attributes\Rule;
use Livewire\Form;

use Carbon\Carbon;

use Facades\App\Livewire\Actions\Dashboard\Appointment\CreateAction;
use Facades\App\Livewire\Actions\Dashboard\AppointmentService\CheckServiceExistInAppointmentServiceAction;

use App\Models\Employee;

class CreateForm extends Form
{
    public ?Appointment $appointment;

    #[Rule('required|string|max:75', as: 'nombre')]
    public string $name = '';

    #[Rule('nullable|string|max:15', as: 'teléfono')]
    public string $phone = '';

    #[Rule('required|exists:employees,id', as: 'empleado')]
    public string $employee_id = '';

    #[Rule('required|date|after_or_equal:today', as: 'calendario')]
    public string $date = '';

    #[Rule('required|date_format:H:i', as: 'horario')]
    public $time = [];

    #[Rule('required', as: 'servicios')]
    public $services = [];

    public int $type_id = 2; // local

    public function getEmployee()
    {
        return Employee::find($this->employee_id);
    }

    public function store($durationTime)
    {
        /**
         * Obtener la duración total de los servicios
         * Determinar start_time y end_time
         * Comprobar que se encuentre dentro del rango del horario laboral del empleado
         * Comprobar que haya disponibilidad horaria dentro de ese rango
         */
        $startTime = Carbon::parse($this->date . ' ' . $this->time);
        $endTime = $startTime->copy()->addMinutes($durationTime);

        $appointment = CreateAction::handle($this->name, $this->type_id, $this->employee_id, $this->phone, $startTime, $endTime, 2);

        for ($i = 0 ; $i < count($this->services) ; $i++) {
            CheckServiceExistInAppointmentServiceAction::handle($appointment->id, $this->services[$i]);
        }

        $this->reset();
    }
}
