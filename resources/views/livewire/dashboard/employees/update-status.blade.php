<div>
    <label class="form-check-label" for="flexSwitchCheckDefault">
        @if($status)
        <svg class="icon text-success">
            <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-circle') }}"></use>
        </svg>
        Disponible
        @else
        <svg class="icon text-danger">
            <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-x-circle') }}"></use>
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
