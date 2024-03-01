<div class="table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @forelse($employees as $employee)
                <div wire:key="{{ $employee->id }}">
                    <tr>
                        <th scope="row">
                            @if($employee->image)
                                <img src="{{ asset($this->verySmall('storage/employees/', $employee->image)) }}" loading="lazy">
                            @endif
                        </th>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->description }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Default button group">
                                <a href="{{ route('dashboard.employees.edit', $employee->id) }}" class="btn btn-ghost-warning" type="button" title="Editar">
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
                    <td colspan="4">
                        Sin resultados @if($this->search)para la buśqueda <strong>{{ $this->search }}</strong>@endif
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div>
        {{ $employees->links() }}
    </div>

</div>
