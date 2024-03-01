<?php

namespace App\Livewire\Dashboard\Appointments;

use Livewire\Component;
use Livewire\Attributes\On;

use App\Livewire\Traits\ImageTrait;

use Facades\App\Livewire\Actions\Dashboard\Appointment\CheckIfEmployeeIsAvailableAction;
use Facades\App\Livewire\Actions\Dashboard\Appointment\UpdateEmployeeAction;
use Facades\App\Livewire\Actions\Dashboard\Appointment\AttendCustomerAction;
use Facades\App\Livewire\Actions\Dashboard\Appointment\CancelAction;
use Facades\App\Livewire\Actions\Dashboard\Appointment\ConfirmAssistanceAction;

use Facades\App\Livewire\Actions\Dashboard\Service\CalculateDurationOfServicesAction;

use Facades\App\Livewire\Actions\Dashboard\AppointmentService\CheckServiceExistInAppointmentServiceAction;
use Facades\App\Livewire\Actions\Dashboard\AppointmentService\DeleteServiceAction;

use App\Models\Appointment;
use App\Models\Item;
use App\Models\Employee;
use App\Models\Service;

class ListAppointmentsCards extends Component
{
    use ImageTrait;

    public $employees = [];
    public $services = [];

    public function mount()
    {
        $this->employees = Employee::get();
        $this->services = Service::with('item')->get();
    }

    public function changeEmployee($appointment, $employee)
    {
        UpdateEmployeeAction::handle($appointment, $employee);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Se cambió el empleado'
        ]);
    }

    public function addService($appointment, $service)
    {
        $check = CheckServiceExistInAppointmentServiceAction::handle($appointment, $service);
        if ($check->wasRecentlyCreated) {
            $this->dispatch('notification-success', [
                'type' => 'success',
                'title' => 'Acción exitosa!',
                'body' => 'Se añadío *' . $check->service->item->name . '*'
            ]);

        } else {
            $this->dispatch('notification-warning', [
                'type' => 'warning',
                'title' => 'Atención!',
                'body' => 'Ya existe el servicio en la agenda'
            ]);
        }
    }

    public function deleteService($appointment, $service)
    {
        DeleteServiceAction::handle($appointment, $service);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Atención!',
            'body' => 'Servicio removido de la agenda'
        ]);
    }

    public function attendCustomer($appointment, $employee, $employee_name)
    {
        /**
         * Checkear que el empleado no esté atendiendo a un cliente
         */

        $check = CheckIfEmployeeIsAvailableAction::handle($employee);

        if($check){
            return $this->dispatch('notification-warning', [
                'type' => 'warning',
                'title' => 'Atención!',
                'body' => $employee_name . ' no se encuentra disponible.'
            ]);
        }

        $duration = CalculateDurationOfServicesAction::handle($appointment);

        if($duration == 0){
            return $this->dispatch('notification-warning', [
                'type' => 'warning',
                'title' => 'Atención!',
                'body' => 'Seleccione los servicios.'
            ]);
        }

        AttendCustomerAction::handle($appointment, $duration);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'El cliente se está atendiendo.'
        ]);

        $this->dispatch('refresh-employees');
    }

    public function cancelAppointment($appointment)
    {
        CancelAction::handle($appointment);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Agenda cancelada'
        ]);
    }

    public function confirmAssistance($appointment){
        ConfirmAssistanceAction::handle($appointment);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Asistencia confirmada'
        ]);
    }

    #[On('refresh-appointments')]
    public function render()
    {
        return view('livewire.dashboard.appointments.list-appointments-cards')->with([
            'appointments' => Appointment::with('customer')
                ->with('employee')
                ->with('status')
                ->with('services')
                ->with('type')
                ->whereIn('status_id', [2, 3])
                ->whereDate('start_time', now()->toDateString())
                ->orderBy('start_time', 'asc')
                ->get()
        ]);
    }
}
