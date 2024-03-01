<div>
    <label class="form-check-label" for="flexSwitchCheckDefault">
        @if($status)
            <svg class="icon">
                <use class="text-success" xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-circle') }}"></use>
            </svg>
            Disponible
        @else
            <svg class="icon">
                <use class="text-danger" xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-x-circle') }}"></use>
            </svg>
            Inactivo
        @endif
    </label>

    <div class="float-end" title="Modificar estado">
        <form wire:submit="save">
            <div class="form-check form-switch">
                <input wire:change="changeStatus" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" @if($status) checked @endif>
            </div>
        </form>
    </div>
</div>
