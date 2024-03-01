<?php

namespace App\Livewire\Dashboard\Appointments;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use App\Livewire\Traits\ImageTrait;

use Facades\App\Livewire\Actions\Dashboard\Appointment\CancelAction;

use App\Models\Appointment;

class ListAppointments extends Component
{
    use ImageTrait;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    #[On('changed-search')]
    public function changedSearch($value)
    {
        $this->resetPage();
        $this->search = $value;
    }

    public function cancel($appointment)
    {
        CancelAction::handle($appointment);

        $this->dispatch('notification-success', [
            'type' => 'success',
            'title' => 'Acción exitosa!',
            'body' => 'Agenda cancelada'
        ]);
    }

    public function render()
    {
        $appointments = Appointment::with('employee')
            ->with('services.item')
            ->with('status');

        if($this->search){
            $appointments->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('start_time', 'like', '%' . $this->search . '%');
        }

        return view('livewire.dashboard.appointments.list-appointments')->with([
            'appointments' => $appointments->orderBy('created_at', 'desc')->paginate(5)
        ]);
    }
}
