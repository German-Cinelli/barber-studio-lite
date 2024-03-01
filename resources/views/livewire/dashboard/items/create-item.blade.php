<div>
    <form wire:submit="save">

        <div class="mb-3">
            <div class="alert alert-info" role="alert">
                <svg class="icon">
                    <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-task') }}"></use>
                </svg>
                Seleccione si corresponde a un <b>producto</b> o <b>servicio</b>.
            </div>

            <x-input-radio name="form.itemType" value="product" label="Producto" wire:model.blur="form.itemType" badge="PRO"/>

            <x-input-radio name="form.itemType" value="service" label="Servicio" wire:model.blur="form.itemType" />

            @error('form.itemType')<div class="text-danger">{{ $message }}</div>@enderror

        </div>

        @include('livewire.dashboard.items.partials.form')

        <!-- image -->
        <div class="mb-3">
            <x-input-file name="form.image" label="Imagen" wire:model="form.image" />
        </div><!-- ./image -->

        @if ($form->image)
            <img src="{{ $form->image->temporaryUrl() }}" width="150px">
        @endif

        <button type="submit" class="btn btn-primary float-end">
            Ingresar
        </button>
    </form>
</div>
