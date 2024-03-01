<div class="table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Slug <i class="cil-info text-info" title="URL en la cual se podrán visualizar todos los productos relacionados a una categoría."></i></th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
                <div wire:key="{{ $category->id }}">
                    <tr>
                        <td>
                            {!! $category->trashed() ? '<del>' . $category->name . '</del>' : $category->name !!}
                        </td>
                        <td><code>/{{ $category->slug }}</code></td>
                        <td>
                            @if($category->trashed())
                                <button wire:click="restore({{ $category->id }})" class="btn btn-ghost-success" type="button" title="Restaurar">
                                    <i class="cil-recycle"></i>
                                </button>
                            @else
                                <div class="btn-group" role="group" aria-label="Default button group">
                                    <button @click="$dispatch('edit-category', { category: '{{ $category->id }}' })" class="btn btn-ghost-warning" type="button" title="Editar" data-coreui-toggle="modal" data-coreui-target="#modal-update">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                                        </svg>
                                    </button>
                                    <button @click="$dispatch('delete-category', { id: '{{ $category->id }}', name: '{{ $category->name }}' })" class="btn btn-ghost-danger" type="button" title="Eliminar">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-trash') }}"></use>
                                        </svg>
                                    </button>
                                </div>
                            @endif
                        </td>
                    </tr>
                </div>
            @empty
                <tr>
                    <td colspan="4">
                        Sin resultados @if($this->search)para la buśqueda <strong>{{ $this->search }}</strong>@endif
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div>
        {{ $categories->links() }}
    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="liveToast2" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-coreui-autohide="false">
            <div class="toast-body">
                <span id="toastQuestion"></span>
                <div class="mt-2 pt-2 border-top">
                    <button type="button" wire:click="delete($event.target.getAttribute('data-category-id'))" id="btn-delete-category" class="btn btn-danger btn-sm text-white">Eliminar</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-coreui-dismiss="toast">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            window.addEventListener('delete-category', event => {
                var id = event.detail.id
                var name = event.detail.name

                const toastLiveExample = document.getElementById('liveToast2')

                const deleteButton = toastLiveExample.querySelector('#btn-delete-category');
                deleteButton.setAttribute('data-category-id', id);

                toastQuestion.textContent = `¿Deseas eliminar *${name}*?`

                const toast = new coreui.Toast(toastLiveExample)
                toast.show()
            });
        </script>
    @endpush

</div>
