<div class="table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo</th>
                <th scope="col">Cliente</th>
                <th scope="col" width="20%">Servicios</th>
                <th scope="col">Empleado</th>
                <th scope="col">Fecha</th>
                <th scope="col">Estado</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @forelse($appointments as $appointment)
                <div wire:key="{{ $appointment->id }}">
                    <tr class="text-nowrap">
                        <th scope="row">{{ $appointment->id }}</th>
                        <td>
                            <span class="badge me-1 bg-{{ $appointment->type->bg_color }}">
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
                        <td>
                            @foreach($appointment->services as $service)
                                <div class="avatar" title="{{ $service->item->name }}">
                                    <img class="avatar-img" src="{{ asset($this->verySmall('storage/items/', $service->item->image)) }}" alt="{{ $service->item->name }}">
                                </div>
                            @endforeach
                        </td>
                        <td>
                            @if($appointment->employee)

                                <img class="avatar-sm avatar-img img-circle" src="{{ asset($this->verySmall('storage/employees/', $appointment->employee->image)) }}" alt="{{ $appointment->employee->name }}">
                                {{ $appointment->employee->name }}

                            @else
                                Sin especificar.
                            @endif
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($appointment->start_time)->format('d-m-Y H:i') }}
                        </td>
                        <td>
                            <span class="badge me-1 bg-{{ $appointment->status->bg_color }}">{{ $appointment->status->name }}</span>
                        </td>
                        <td>
                            @if($appointment->status_id != 1)
                            <div class="btn-group" role="group" aria-label="Default button group">
                                <!--<button @click="$dispatch('edit-appointment', { appointment: '{{ $appointment->id }}' })" class="btn btn-ghost-warning" type="button" title="Editar" data-coreui-toggle="modal" data-coreui-target="#modal-update">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                                    </svg>
                                </button>-->
                                <button @click="$dispatch('delete-appointment', { id: {{ $appointment->id }} })" class="btn btn-ghost-danger" type="button" title="Cancelar">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-trash') }}"></use>
                                    </svg>
                                </button>
                            </div>
                            @endif
                        </td>
                    </tr>
                </div>
            @empty
                <tr>
                    <td colspan="8">
                        Sin resultados @if($this->search)para la buśqueda <strong>{{ $this->search }}</strong>@endif
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div>
        {{ $appointments->links() }}
    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="liveToast2" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-coreui-autohide="false">
            <div class="toast-body">
                <span id="toastQuestion"></span>
                <div class="mt-2 pt-2 border-top">
                    <button type="button" wire:click="cancel($event.target.getAttribute('data-appointment-id'))" id="btn-delete-appointment" class="btn btn-danger btn-sm text-white">Cancelar agenda</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-coreui-dismiss="toast">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            window.addEventListener('delete-appointment', event => {
                var id = event.detail.id

                const toastLiveExample = document.getElementById('liveToast2')

                const deleteButton = toastLiveExample.querySelector('#btn-delete-appointment');
                deleteButton.setAttribute('data-appointment-id', id);

                toastQuestion.textContent = `¿Deseas cancelar la agenda N° ${id}?`

                const toast = new coreui.Toast(toastLiveExample)
                toast.show()
            });
        </script>
    @endpush

</div>
