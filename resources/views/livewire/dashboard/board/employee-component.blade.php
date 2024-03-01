<div class="row">

    @foreach ($employees as $employee)
        <div class="col-sm-12 col-md-12 col-lg-6 my-3">
            <div class="card">
                <div class="card-body">
                    <div class="text-medium-emphasis text-center mb-4">
                        @if ($employee->image)
                            <div>
                                <img src="{{ asset($this->small('storage/employees/', $employee->image)) }}" style="border-radius: 50%; border: 3px solid @if($employee->serving) #E74C3C @else #2ECC71 @endif" width="96px" loading="lazy">
                                <p class="lead">{{ $employee->name }}</p>
                            </div>
                        @endif
                    </div>

                    <div class="fs-4 fw-semibold"></div>

                    @if($employee->serving)
                        <small class="text-medium-emphasis text-uppercase fw-semibold">
                            <i class="cil-user"></i>
                            {{ $employee->serving->name }}
                        </small>
                    @endif

                    @if($employee->serving)

                        <span class="float-end">

                            <button wire:click="finishAppointment({{ $employee->serving->id }})" class="btn btn-sm" title="Concluir agenda">
                                <i class="cil-media-pause text-primary"></i>
                            </button>

                            <span x-data="{ countdown: { hours: 0, minutes: 0, seconds: 0 } }"
                                x-init="() => {
                                    const endTime = new Date('{{ $employee->end_time_js }}').getTime();
                                    setInterval(() => {
                                        const now = new Date().getTime();
                                        const timeLeft = Math.max(0, endTime - now);
                                        countdown.hours = Math.floor(timeLeft / (1000 * 60 * 60));
                                        countdown.minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                                        countdown.seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
                                    }, 1000);
                                }">
                                <span x-text="String(countdown.hours).padStart(2, '0') + ':' + String(countdown.minutes).padStart(2, '0') + ':' + String(countdown.seconds).padStart(2, '0')"></span>
                            </span>
                        </span>
                    @else
                        <span class="float-end">--:--:--</span>
                    @endif

                </div>
            </div>
        </div>
    @endforeach

</div>
