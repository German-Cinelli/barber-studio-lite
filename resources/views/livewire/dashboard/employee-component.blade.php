<div>

    @section('nav-content')
        <li class="breadcrumb-item active"><span>Empleados</span></li>
    @endsection

    <div class="card mb-4">
        <div class="card-header">
            <strong>Listado de empleados</strong>
            <button class="btn btn-primary position-relative rounded-0 float-end" type="button" data-coreui-toggle="offcanvas" data-coreui-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <svg class="icon">
                    <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-plus') }}"></use>
                </svg>
                Nuevo
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    PRO
                </span>
            </button>
        </div>

        <div class="card-body">

            <livewire:dashboard.search-component lazy />

            <livewire:dashboard.employees.list-employees lazy />

        </div>
    </div>

</div>
