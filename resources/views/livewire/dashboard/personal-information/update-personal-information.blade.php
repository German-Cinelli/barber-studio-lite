<div>
    <form wire:submit="save">

        <!-- document -->
        <div class="mb-3">
            <x-input-text name="form.document" label="Documento" type="text" wire:model.blur="form.document" />
        </div><!-- ./document -->

        <!-- location -->
        <div class="mb-3">
            <x-input-text name="form.location" label="Localidad" type="text" wire:model.blur="form.location" />
        </div><!-- ./location -->

        <!-- address -->
        <div class="mb-3">
            <x-input-text name="form.address" label="Dirección" type="text" wire:model.blur="form.address" />
        </div><!-- ./address -->

        <!-- phone -->
        <div class="mb-3">
            <x-input-text name="form.phone" label="Teléfono" type="number" wire:model.blur="form.phone" />
        </div><!-- ./phone -->

        <button type="submit" class="btn btn-warning float-end">
            Actualizar
        </button>
    </form>
</div>
