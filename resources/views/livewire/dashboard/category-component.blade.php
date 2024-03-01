<div>

    @section('nav-content')
        <li class="breadcrumb-item active"><span>Categorias</span></li>
    @endsection

    <livewire:dashboard.categories.create-category />

    <livewire:dashboard.categories.update-category />

    <div class="card mb-4">
        <div class="card-header">
            <strong>Listado de categorías</strong>
            <button class="btn btn-sm btn-primary float-end" type="button" data-coreui-toggle="modal" data-coreui-target="#modal-create">
                <svg class="icon">
                    <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-plus') }}"></use>
                </svg>
                Nueva
            </button>
        </div>

        <div class="card-body">

            <livewire:dashboard.search-component lazy />

            <livewire:dashboard.categories.list-categories />

        </div>
    </div>

</div>
