<?php

namespace App\Livewire\Dashboard\AppointmentService;

use Livewire\Component;

use Facades\App\Livewire\Actions\Dashboard\AppointmentService\CheckServiceExistInAppointmentServiceAction;

class CreateAppointmentService extends Component
{
    public $appointment;

    public $services;

    public function addService($service)
    {
        $check = CheckServiceExistInAppointmentServiceAction::handle($this->appointment, $service);

        if ($check->wasRecentlyCreated) {
            $this->dispatch('notification-success', [
                'type' => 'success',
                'title' => 'Acción exitosa!',
                'body' => 'Servicio añadido'
            ]);

        } else {
            $this->dispatch('notification-warning', [
                'type' => 'warning',
                'title' => 'Atención!',
                'body' => 'Ya existe el servicio en la agenda'
            ]);
        }

        $this->dispatch('refresh-appointment-services');
    }
}
