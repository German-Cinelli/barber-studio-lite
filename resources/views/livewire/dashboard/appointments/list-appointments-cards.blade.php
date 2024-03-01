<div class="row">

    <div class="text-end">
        <button class="btn btn-sm btn-outline-primary rounded-0" type="button" data-coreui-toggle="modal" data-coreui-target="#modal-create">
            <svg class="icon">
                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-plus') }}"></use>
            </svg>
        </button>
    </div>

    @forelse($appointments as $appointment)
        <div wire:key="{{ $appointment->id }}" class="col-sm-6 col-md-12 col-lg-4 my-3">
            <div class="card">
                <div class="card-body">

                    <div class="ribbon-wrapper ribbon-sm">
                        <div class="ribbon bg-{{ $appointment->type->bg_color }}">
                            <small class="text-white">{{ $appointment->type->name }}</small>
                        </div>
                    </div>

                    <div class="text-medium-emphasis small text-uppercase fw-semibold text-center mt-3">
                        <i class="cil-user"></i>
                        {{ $appointment->name }}
                    </div>

                    <div class="text-center fs-6 py-3">
                        <small>
                            <svg class="icon">
                                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-clock') }}"></use>
                            </svg>
                            {{ \Carbon\Carbon::parse($appointment->start_time)->format('H:i') }}
                        </small>
                    </div>



                    <div class="text-center">

                        <div class="btn-group">

                            <div class="avatar avatar-md" data-coreui-toggle="dropdown" aria-expanded="false">
                                <div x-data="{ hover: false }" class="avatar bg-light text-dark"
                                    data-coreui-toggle="dropdown" aria-expanded="false"
                                    @if (in_array($appointment->status_id, [1, 2, 3]))
                                        @mouseover="hover = true"
                                        @mouseleave="hover = false">
                                    @endif

                                    @if ($appointment->employee)
                                    <div style="position: relative;">

                                            <i class="cil-transfer text-warning" style="cursor: pointer" title="Cambiar de empleado" x-show="hover"></i>

                                            <span x-show="!hover">
                                                <img class="avatar-img"
                                                    src="{{ asset($this->verySmall('storage/employees/', $appointment->employee->image)) }}"
                                                    title="{{ $appointment->employee->name }}" alt=""
                                                    @if (in_array($appointment->status_id, [1, 2, 3]))
                                                    loading="lazy" @mouseover="hover = true" @mouseleave="hover = false"
                                                    style="opacity: 1; transition: opacity 0.3s ease-in-out;"
                                                    @endif
                                                />
                                            </span>
                                        </div>
                                    @else
                                        <i class="cil-user-plus text-success" style="cursor: pointer" title="Añadir empleado" x-show="hover"></i>
                                        <span x-show="!hover">?</span> @endif
                                    </div>
                                    @if (in_array($appointment->status_id, [1, 2, 3]))
                                        <ul class="dropdown-menu" style="">
                                            @foreach ($employees as $employee)
                                                <li>
                                                    <a wire:click="changeEmployee({{ $appointment->id }}, {{ $employee->id }})"
                                                        class="dropdown-item {{ $appointment->employee_id == $employee->id ? 'disabled' : '' }}"
                                                        href="#">
                                                        <img src="{{ asset($this->small('storage/employees/', $employee->image)) }}"
                                                            style="border-radius: 50%" alt="" width="36px"
                                                            loading="lazy">
                                                        {{ $employee->name }}
                                                        @if ($employee->id == $appointment->employee_id)
                                                            <i class="cil-check text-success"></i>
                                                        @endif
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>

                                <button
                                    class="btn btn-ghost-{{ $appointment->status->bg_color }} rounded-0 btn-sm dropdown-toggle"
                                    type="button" data-coreui-toggle="dropdown" aria-expanded="false">

                                    {{ $appointment->status->name }}
                                </button>
                                <ul class="dropdown-menu" style="">
                                    @switch($appointment->status_id)
                                        @case(1)
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="cil-x-alt text-danger"></i>
                                                    Ocultar
                                                </a>
                                            </li>
                                        @break

                                        @case(2)
                                            <li>
                                                <a wire:click="confirmAssistance({{ $appointment->id }})" class="dropdown-item" href="javascript:void(0)">
                                                    <i class="cil-check-alt text-success"></i>
                                                    Confirmar asistencia
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a wire:click="cancelAppointment({{ $appointment->id }})" class="dropdown-item" href="javascript:void(0)">
                                                    <i class="cil-x text-danger"></i>
                                                    Cancelar agenda
                                                </a>
                                            </li>
                                        @break

                                        @case(3)
                                            @if ($appointment->employee)
                                                <li>
                                                    <a class="dropdown-item"
                                                        wire:click="attendCustomer({{ $appointment->id }}, {{ $appointment->employee_id }}, '{{ $appointment->employee->name }}')"
                                                        href="javascript:void(0)">
                                                        <i class="cil-chevron-right text-success"></i>
                                                        Atenderse con {{ $appointment->employee->name }}
                                                    </a>
                                                </li>
                                            @endif
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a wire:click="cancelAppointment({{ $appointment->id }})" class="dropdown-item" href="javascript:void(0)">
                                                    <i class="cil-x text-danger"></i>
                                                    Cancelar agenda
                                                </a>
                                            </li>
                                        @break

                                        @case(4)
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="cil-check-alt text-success"></i>
                                                    Finalizar consulta
                                                </a>
                                            </li>
                                        @break

                                        @default
                                    @endswitch
                                </ul>
                            </div>

                        </div>

                        <hr>

                        <div class="service-container">

                            @foreach ($appointment->services as $service)
                                <div wire:key="{{ $service->id }}" class="avatar avatar-sm">
                                    <div x-data="{ isHovered: false }" @mouseover="isHovered = true"
                                        @mouseout="isHovered = false" wire:key="{{ $service->id }}"
                                        class="avatar avatar-sm relative">
                                        <img class="avatar-img"
                                            src="{{ asset($this->verySmall('storage/items/', $service->item->image)) }}"
                                            title="{{ $service->item->name }}" alt="" loading="lazy" />
                                        <span x-show="isHovered" class="avatar-status"
                                            title="Quitar {{ $service->item->name }}"
                                            wire:click="deleteService({{ $appointment->id }}, {{ $service->id }})"
                                            style="cursor: pointer">
                                            <i class="cil-x bg-danger text-white"
                                                style="font-size: 1.1em; border-radius: 50%"></i>
                                        </span>
                                    </div>
                                </div>
                            @endforeach

                            <div class="float-end">

                                <div class="btn-add-service avatar avatar-sm text-white" data-coreui-toggle="dropdown" aria-expanded="false">
                                    <img class="avatar-img" src="{{ asset('coreui/assets/img/plus.png') }}" alt="">
                                </div>

                                <ul class="dropdown-menu" style="max-height: 250px; overflow-y: auto"
                                    data-coreui-toggle="auto-dropdown">
                                    @foreach ($services as $service)
                                        <li wire:key="{{ $service->id }}">
                                            <a wire:click="addService({{ $appointment->id }}, {{ $service->id }})"
                                                class="dropdown-item" href="javascript:void(0)">
                                                {{ $service->item->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            @empty
                <div class="container">
                    <div class="callout callout-primary">
                        Sin resultados.
                    </div>
                </div>
        @endforelse

    </div>
</div>
