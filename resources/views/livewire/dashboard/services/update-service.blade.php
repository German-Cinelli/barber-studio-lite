<div>
    <form wire:submit="update">

        <div class="callout callout-info caption-top" role="alert">
            <svg class="icon">
                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-clock') }}"></use>
            </svg>
            Tiempo aproximado.
        </div>


        <!-- duration_time -->
        <div class="form-floating mb-3">
            <x-input-text name="form.duration_time" label="Minutos" type="number" wire:model.blur="form.duration_time" />
        </div>

    </form>
</div>
