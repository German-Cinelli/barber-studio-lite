<div class="row">

    <div class="col-sm-12 col-md-6 col-lg-8">
        <div class="card mb-4">
            <div class="card-header">
                <strong># Datos</strong>
            </div>

            <div class="card-body">

                <!-- name -->
                <div class="form-floating mb-3">
                    <x-input-text name="form.name" label="Nombre" type="text" wire:model="form.name" />
                </div>

                <!-- phone -->
                <div class="form-floating mb-3">
                    <x-input-text name="form.phone" label="Teléfono" type="number" wire:model="form.phone" />
                </div>

                <!-- employee_id -->
                <div class="mb-3">
                    <x-input-select name="form.employee_id" label="Empleado" wire:model.blur="form.employee_id" wire:change="changeEmployee" :collection="$employees" />
                </div>

                <!-- date -->
                <div class="form-floating mb-3">
                    <x-input-text name="form.date" id="dateAppointment" label="Fecha" type="date" wire:model="form.date" wire:change="changeDate" />
                </div>

                <!-- time -->
                <div class="mb-3">
                    <x-input-select-schedule name="form.time" label="Horario" wire:model.blur="form.time" :collection="$availableSchedules" />
                </div>

                <button wire:click="save" type="submit" class="btn btn-primary float-end">
                    Ingresar
                </button>

            </div>
        </div>

    </div>

    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card mb-4">
            <div class="card-header">
                <strong># Servicios</strong>
            </div>

            <div class="card-body">

                <div class="table-responsive" style="max-height: 408px; overflow-y: auto;">
                    <table class="table align-middle caption-top">
                        <caption>
                            Total: {{ $durationTime }} min
                        </caption>
                        <tbody>
                            @forelse($services as $service)
                                <div wire:key="{{ $service->id }}">
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input wire:model="form.services" wire:click="toggleService" class="form-check-input" type="checkbox" value="{{ $service->id }}"
                                                    id="flexCheckServiceId{{ $service->id }}">
                                            </div>
                                        </th>
                                        <td>
                                            <label class="form-check-label" for="flexCheckServiceId{{ $service->id }}"
                                                style="user-select: none; cursor: pointer">
                                                <div class="avatar" title="{{ $service->item->name }}">
                                                    <img class="avatar-img"
                                                        src="{{ asset($this->verySmall('storage/items/', $service->item->image)) }}"
                                                        alt="{{ $service->item->name }}">

                                                </div>
                                                {{ $service->item->name }}
                                                <small>({{ $service->duration_time }} min)</small>
                                            </label>
                                        </td>
                                    </tr>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="2">
                                        Sin resultados
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>

                @error('form.services')
                    <div class="text-danger">
                        Seleccione al menos un servicio
                    </div>
                @enderror

            </div>
        </div>
    </div>

    @push('js')
        <script>
            var currentDate = new Date().toISOString().split('T')[0];
            document.getElementById('dateAppointment').setAttribute('min', currentDate);
        </script>
    @endpush

</div>
