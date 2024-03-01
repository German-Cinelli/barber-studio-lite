<?php

namespace App\Livewire\Dashboard\AppointmentService;

use Livewire\Component;
use Livewire\Attributes\On;

use App\Livewire\Traits\ImageTrait;

use App\Models\AppointmentService;

class ListAppointmentServices extends Component
{
    use ImageTrait;

    public $appointment;

    public $services;

    public $services_in_appointment;

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden"></span>
                <span class="visually-hidden"></span>
            </div>
            <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden"></span>
                <span class="visually-hidden"></span>
            </div>
        </div>
        HTML;
    }

    #[On('refresh-appointment-services')]
    public function render()
    {
        return view('livewire.dashboard.appointment-service.list-appointment-services')->with([
            'appointment_services' => AppointmentService::with('service')
                ->where('appointment_id', $this->appointment)
                ->get()
        ]);
    }
}
