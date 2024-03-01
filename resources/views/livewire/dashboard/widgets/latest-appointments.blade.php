<div class="card-body table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo</th>
                <th scope="col">Cliente</th>
                <th scope="col">Servicios</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
            @forelse($latestAppointments as $appointment)
            <tr>
                <th scope="row">{{ $appointment->id }}</th>
                <td class="text-nowrap">
                    <span class="badge bg-{{ $appointment->type->bg_color }}">
                        {{ $appointment->type->name }}
                    </span>
                </td>
                <td>
                    @if($appointment->type == 'local')
                        {{ $appointment->name }}
                    @else
                        {{ $appointment->customer->user->name }}
                    @endif
                </td>
                <td class="text-nowrap">
                    @foreach($appointment->services as $service)
                        <div class="avatar" title="{{ $service->item->name }}">
                            <img class="avatar-img" src="{{ asset($this->verySmall('storage/items/', $service->item->image)) }}" alt="{{ $service->item->name }}" loading="lazy">
                        </div>
                    @endforeach
                </td>
                <td><span class="badge me-1 bg-{{ $appointment->status->bg_color }}">{{ $appointment->status->name }}</span></td>
                <td class="text-nowrap">{{ \Carbon\Carbon::parse($appointment->start_time)->format('d-m-Y H:i') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6">
                    Sin resultados.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
