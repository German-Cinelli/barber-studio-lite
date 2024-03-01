<!-- name -->
<div class="mb-3">
    <x-input-text name="form.name" label="Nombre" type="text" wire:model.blur="form.name" />
</div><!-- ./name -->

<!-- description -->
<div class="mb-3">
    <x-input-text name="form.description" label="Breve descripción" type="text" wire:model.blur="form.description" />
</div><!-- ./description -->

<!-- image -->
<div class="mb-3">
    <x-input-file name="form.image" label="Avatar" wire:model="form.image" id="{{ rand() }}" />
</div><!-- ./image -->

@if ($form->image)
    <img src="{{ $form->image->temporaryUrl() }}" width="150px">
@endif
