<!-- name -->
<div class="mb-3">
    <x-input-text name="form.name" label="Nombre" type="text" wire:model.blur="form.name" />
</div><!-- ./name -->

<!-- slug -->
<div class="mb-3">
    <x-input-text name="form.slug" label="Slug" type="text" wire:model.blur="form.slug" />
</div><!-- ./slug -->

<!-- category_id -->
<div class="mb-3">
    <x-input-select name="form.category_id" label="Categoría" wire:model.blur="form.category_id" :collection="$categories" />
</div>

<!-- price -->
<div class="mb-3">
    <x-input-text name="form.price" label="Precio" type="number" wire:model.blur="form.price" />
</div><!-- ./price -->

<!-- description -->
<div class="mb-3">
    <x-input-textarea name="form.description" label="Descripción" type="number" wire:model.blur="form.description" />
</div><!-- ./description -->


