<div>
    <form wire:submit="save">

        @include('livewire.dashboard.items.partials.form')

        <button type="submit" class="btn btn-warning float-end">
            Actualizar
            <div wire:loading.delay class="spinner-border spinner-border-sm" role="status">
                <span class="visually-hidden"></span>
            </div>
        </button>
    </form>
</div>
