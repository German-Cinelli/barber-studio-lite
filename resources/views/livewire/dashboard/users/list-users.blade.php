<div class="table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Roles</th>
                <th scope="col">Fecha de registro</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <div wire:key="{{ $user->id }}">
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge badge-sm bg-info ms-auto">
                                    {{ $role->name }}
                                </span>
                            @endforeach
                        </td>
                        <td>{{ $user->created_at->format('d-m-Y') }}</td>
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
        {{ $users->links() }}
    </div>

</div>
