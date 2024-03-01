<div>
    <div class="accordion" id="accordionExample">

        @foreach($schedules as $schedule)

        <div wire:key="{{ $schedule->id }}">

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapse{{ $schedule->id }}" aria-expanded="false" aria-controls="collapse{{ $schedule->id }}">
                        <i class="{{ $schedule->status ? 'cil-check-circle text-success' : 'cil-minus text-danger' }} me-1"></i>
                        {{ $schedule->getDayName($schedule->weekday) }}

                        <div class="badge text-bg-light ms-2">
                            <small>
                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $schedule->start_time)->format('H:i'); }} -
                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $schedule->end_time)->format('H:i'); }}
                            </small>
                        </div>

                    </button>
                </h2>
                <div wire:ignore id="collapse{{ $schedule->id }}" class="accordion-collapse collapse" data-coreui-parent="#accordionExample">
                    <div class="accordion-body">

                        <div class="form-check form-switch">
                            <input wire:change="changeStatus({{ $schedule->id }})" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault{{ $schedule->id }}" @if($schedule->status) checked @endif>
                            <label for="">¿Trabaja éste día?</label>
                        </div>

                        <div class="mt-3">
                            <label for="">Hora de entrada</label>

                            <div class="row">
                                <div class="col-10">
                                    <input type="time" wire:model="startTimes.{{ $schedule->id }}" class="form-control">
                                </div>
                                <div class="col-2">
                                    <button type="button" wire:click="updateStartTime({{ $schedule->id }})" class="btn btn-ghost-primary">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-check-alt') }}"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <hr>

                            <label for="">Hora de salida</label>
                            <div class="row">
                                <div class="col-10">
                                    <input type="time" wire:model="endTimes.{{ $schedule->id }}" class="form-control">
                                </div>
                                <div class="col-2">
                                    <button type="button" wire:click="updateEndTime({{ $schedule->id }})" class="btn btn-ghost-primary">
                                        <i class="cil-check-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        @endforeach

    </div>
</div>
