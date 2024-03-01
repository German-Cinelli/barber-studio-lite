<div class="float-end">
    <div class="btn-add-service avatar avatar-sm text-white" data-coreui-toggle="dropdown" aria-expanded="false">
        <img class="avatar-img" src="{{ asset('coreui/assets/img/plus.png') }}" alt="">
    </div>
    <ul class="dropdown-menu" style="max-height: 250px; overflow-y: auto" data-coreui-toggle="auto-dropdown">
        @foreach ($services as $service)
            <li wire:key="{{ $service->id }}">
                <a wire:click="addService({{ $service->id }})" class="dropdown-item" href="javascript:void(0)">
                    {{ $service->item->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
