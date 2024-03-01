<div>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Enlace</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employee_socials as $social)
                <tr>
                    <th scope="row">
                        <svg class="icon">
                            <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/brand.svg#cib-' . $social->icon) }}"></use>
                        </svg>
                    </th>
                    <td>{{ $social->pivot->href }}</td>
                    <td>
                        <button type="button" wire:click="delete({{ $social->pivot->id }})" class="btn btn-ghost-danger"  title="Eliminar">
                            <i class="cil-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
