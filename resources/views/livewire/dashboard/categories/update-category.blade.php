<div wire:ignore.self class="modal fade" tabindex="-1" id="modal-update">
    <div class="modal-dialog">
        <div class="modal-content">
            <form wire:submit="save">
                <div class="modal-header">
                    <h5 class="modal-title">Editar categoría</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    @include('livewire.dashboard.categories.partials.form')

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-warning">
                        Actualizar
                        <div wire:loading.delay class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden"></span>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
