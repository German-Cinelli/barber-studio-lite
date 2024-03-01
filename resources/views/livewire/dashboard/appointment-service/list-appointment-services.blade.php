<div class="service-container">

    @foreach($appointment_services as $appointment_service)
        <div wire:key="{{ $appointment_service->id }}" class="avatar avatar-sm">
            <img class="avatar-img" src="{{ asset($this->verySmall('storage/items/', $appointment_service->service->item->image)) }}" title="{{ $appointment_service->service->item->name }}" alt="" loading="lazy" />
        </div>
    @endforeach

    <livewire:dashboard.appointment-service.create-appointment-service :appointment="$appointment" :services="$services" />

</div>
