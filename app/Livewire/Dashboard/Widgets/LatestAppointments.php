<?php

namespace App\Livewire\Dashboard\Widgets;

use Livewire\Component;

use App\Livewire\Traits\ImageTrait;

use App\Models\Appointment;

class LatestAppointments extends Component
{
    use ImageTrait;

    public function render()
    {
        return view('livewire.dashboard.widgets.latest-appointments')->with([
            'latestAppointments' => Appointment::with('customer')
                ->with('services')
                ->with('status')
                ->with('type')
                ->with('customer')
                ->orderBy('created_at', 'desc')
                ->take(8)
                ->get()
        ]);
    }

    public function placeholder()
    {
        $rowCount = 5;

        $html = <<<HTML
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Servicios</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
        HTML;

        for ($i = 0; $i < $rowCount; $i++) {
            $html .= <<<HTML
                <tr class="placeholder-glow">
                    <th scope="row"><span class="placeholder col-2"></span></th>
                    <td><span class="placeholder col-3"></span></td>
                    <td><span class="placeholder col-5"></span></td>
                    <td>
                        <div style="width: 32px; height: 32px; display: inline-block; border-radius: 50%; background-color: #ABB2B9;"></div>
                        <div style="width: 32px; height: 32px; display: inline-block; border-radius: 50%; background-color: #ABB2B9;"></div>
                    </td>
                    <td><span class="placeholder col-9"></span></td>
                    <td><span class="placeholder col-4"></span></td>
                </tr>
            HTML;
        }

        $html .= <<<HTML
                </tbody>
            </table>
        </div>
        HTML;

        return $html;
    }
}
