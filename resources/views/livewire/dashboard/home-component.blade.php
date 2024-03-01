<div>

    <div class="row mb-4">
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card overflow-hidden">
                <div class="card-body p-0 d-flex align-items-center">
                    <div class="bg-primary text-white p-4 me-3">
                        <svg class="icon icon-xl">
                            <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-notes') }}"></use>
                        </svg>
                    </div>
                    <div>
                        <livewire:dashboard.widgets.appointments-for-today lazy />
                        <div class="text-medium-emphasis text-uppercase fw-semibold small">
                            Turnos para hoy
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card overflow-hidden">
                <div class="card-body p-0 d-flex align-items-center">
                    <div class="bg-warning text-white p-4 me-3">
                        <svg class="icon icon-xl">
                            <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-calculator') }}">
                            </use>
                        </svg>
                    </div>
                    <div>
                        <livewire:dashboard.widgets.tickets-pending-counter lazy />
                        <div class="text-medium-emphasis text-uppercase fw-semibold small">
                            Tickets pendientes
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card overflow-hidden">
                <div class="card-body p-0 d-flex align-items-center">
                    <div class="bg-info text-white p-4 me-3">
                        <svg class="icon icon-xl">
                            <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-dollar') }}"></use>
                        </svg>
                    </div>
                    <div>
                        <livewire:dashboard.widgets.total-income lazy />
                        <div class="text-medium-emphasis text-uppercase fw-semibold small">
                            Ingresos
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card overflow-hidden">
                <div class="card-body p-0 d-flex align-items-center">
                    <div class="bg-danger text-white p-4 me-3">
                        <svg class="icon icon-xl">
                            <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-people') }}"></use>
                        </svg>
                    </div>
                    <div>
                        <livewire:dashboard.widgets.waiting-customers-counter lazy />
                        <div class="text-medium-emphasis text-uppercase fw-semibold small">
                            Clientes en espera
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>


    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-9">
            <div class="card mb-4">
                <div class="card-header">
                    <strong>Últimas agendas</strong>
                </div>
                <livewire:dashboard.widgets.latest-appointments lazy />
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-3">
            <div class="card mb-4">
                <div class="card-header">
                    <strong>Tipo de agendas</strong>
                </div>
                <div class="card-body">
                    <livewire:dashboard.widgets.type-of-appointments-chart />
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <strong>Servicios más vendidos</strong>
                </div>
                <livewire:dashboard.widgets.top-services-sold-table lazy />
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <strong>Productos más vendidos</strong>
                </div>
                <livewire:dashboard.widgets.top-products-sold-table lazy />
            </div>
        </div>
    </div>
</div>
