<div>

    @section('nav-content')
        <li class="breadcrumb-item active"><span>Usuarios</span></li>
    @endsection

    <div class="card mb-4">
        <div class="card-header">
            <strong>Listado de usuarios</strong>
        </div>

        <div class="card-body">

            <livewire:dashboard.search-component lazy />

            <livewire:dashboard.users.list-users />

        </div>
    </div>

</div>
