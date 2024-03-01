<div>
    <form wire:submit="save">

        <!-- social_id -->
        <div class="mb-3">
            <x-input-select name="form.social_id" label="Red social" wire:model.blur="form.social_id" :collection="$socials" />
        </div>

        <!-- href -->
        <div class="form-floating mb-3">
            <x-input-text name="form.href" label="Enlace" type="text" wire:model.blur="form.href" />
        </div>

        <button type="submit" class="btn btn-primary float-end">
            Ingresar
        </button>

    </form>
</div>
