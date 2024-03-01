<div class="row">
    <div class="col">
        <div class="form-floating mb-3 float-start">
            <input type="search" wire:model.live.debounce.800ms="search" class="form-control form-control-sm"
                placeholder="">
            <label>
                <svg class="icon">
                    <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-search') }}"></use>
                </svg>
                {{ __('Buscar...') }}
            </label>
        </div>
    </div>
</div>
