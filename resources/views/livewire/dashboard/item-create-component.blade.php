<div>

    @section('nav-content')
        <li class="breadcrumb-item">Artículos</li>
        <li class="breadcrumb-item active"><span>Nuevo</span></li>
    @endsection

    <div class="card mb-4">
        <div class="card-header">
            <strong>Nuevo artículo</strong>
        </div>

        <div class="card-body">

            <div class="my-3">
                <livewire:dashboard.items.create-item :categories="$categories" lazy />
            </div>

        </div>
    </div>

</div>
