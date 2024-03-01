<div>

    @section('nav-content')
        <li class="breadcrumb-item"><a href="{{ route('dashboard.employees') }}">Empleados</a></li>
        <li class="breadcrumb-item active"><span>Editar</span></li>
    @endsection

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <i class="cil-check-circle"></i>
            {{ session('success') }}
        </div>
    @endif

    <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-8">

            <div class="card mb-4">
                <div class="card-header">
                    <strong># Empleado</strong>
                </div>

                <div class="card-body">

                    <div class="my-3">
                        <livewire:dashboard.employees.update-status :employee="$employee"/>
                    </div>

                    <livewire:dashboard.employees.update-employee :employee="$employee" />
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <strong># Datos personales</strong>
                </div>

                <div class="card-body">
                    <livewire:dashboard.personal-information.update-personal-information :employee="$employee" />
                </div>
            </div>

        </div>

        <div class="col-sm-12 col-md-6 col-lg-4">

            <div class="card mb-4">
                <div class="card-header">
                    <strong># Horario laboral</strong>
                </div>

                <div class="card-body">

                    <div class="callout callout-primary">
                        A continuación indique el horario laboral del empleado.
                    </div>

                    <livewire:dashboard.schedules.list-schedules :employee="$employee" lazy />
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <strong># Redes sociales</strong>
                </div>

                <div class="card-body">
                    <livewire:dashboard.employee-social.create-employee-social :employee="$employee" />

                    <livewire:dashboard.employee-social.list-employee-social :employee="$employee->id" />
                </div>
            </div>

        </div>
    </div>

</div>
