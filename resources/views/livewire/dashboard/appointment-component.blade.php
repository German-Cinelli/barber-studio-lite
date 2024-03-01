<div>

    @section('nav-content')
        <li class="breadcrumb-item active"><span>Agenda</span></li>
    @endsection

    <div class="card mb-4">
        <div class="card-header">
            <strong>Listado de agendas</strong>
            <a href="javascript:void(0)" class="btn btn-primary position-relative rounded-0 float-end" type="button">
                <svg class="icon">
                    <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-plus') }}"></use>
                </svg>
                Nueva
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    PRO
                </span>
            </a>
        </div>

        <div class="card-body">

            <livewire:dashboard.search-component lazy />

            <livewire:dashboard.appointments.list-appointments />

        </div>
    </div>

</div>
