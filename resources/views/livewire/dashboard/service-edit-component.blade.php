<div>

    @section('nav-content')
        <li class="breadcrumb-item"><a href="{{ route('dashboard.services') }}">Servicios</a></li>
        <li class="breadcrumb-item active"><span>Editar</span></li>
    @endsection

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <svg class="icon">
                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-check-circle') }}"></use>
            </svg>
            {{ session('success') }}
        </div>
    @endif

    <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <strong># Información</strong>
                </div>

                <div class="card-body">
                    <div class="my-3">
                        <livewire:dashboard.items.update-status :item="$service->item"/>
                    </div>

                    <livewire:dashboard.items.update-item :item="$service->item" :categories="$categories"/>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4">

            <div class="card mb-4">
                <div class="card-header">
                    <strong># Imagen principal</strong>
                </div>
                <div class="card-body">
                    <livewire:dashboard.items.update-image :item="$service->item"/>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <strong># Duración</strong>
                </div>

                <div class="card-body">
                    <livewire:dashboard.services.update-service :service="$service"/>
                </div>
            </div>
        </div>
    </div>

</div>
