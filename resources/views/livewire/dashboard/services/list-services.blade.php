<div class="table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Slug</th>
                <th scope="col">Categoría</th>
                <th scope="col">Precio</th>
                <th scope="col">Duración</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @forelse($services as $service)
                <div wire:key="{{ $service->id }}">
                    <tr>
                        <th scope="row">
                            @if($service->item->image)
                                <div>
                                    <img src="{{ asset($this->verySmall('storage/items/', $service->item->image)) }}" loading="lazy">
                                </div>
                            @endif
                        </th>
                        <td>
                            {!! $service->item->status ? $service->item->name : '<del>' . $service->item->name . '</del>' !!}
                        </td>
                        <td><code>/{{ $service->item->slug }}</code></td>
                        <td>
                            @if($service->item->category)
                                {{ $service->item->category->name }}
                            @endif
                        </td>
                        <td>{{ $service->item->price }}</td>
                        <td>{{ $service->duration_time }}</td>
                        <td>{{ $service->item->description }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Default button group">
                                <a href="{{ route('dashboard.services.edit', $service->id) }}" class="btn btn-ghost-warning" type="button" title="Editar">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                </div>
            @empty
                <tr>
                    <td colspan="8">
                        Sin resultados @if($this->search)para la buśqueda <strong>{{ $this->search }}</strong>@endif
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div>
        {{ $services->links() }}
    </div>

</div>
