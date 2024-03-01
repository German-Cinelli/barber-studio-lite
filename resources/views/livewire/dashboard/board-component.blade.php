<div>

    <livewire:dashboard.appointments.create-simple-appointment />

    @section('nav-content')
        <li class="breadcrumb-item active"><span>Tablero</span></li>
    @endsection

    @section('button-in-tab')
        <button class="btn btn-info position-relative rounded-0 float-end" type="button" data-coreui-toggle="offcanvas" data-coreui-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            <svg class="icon">
                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-hamburger-menu') }}"></use>
            </svg>
            Tickets
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                PRO
            </span>
        </button>
    @endsection

    <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <strong>Lista de espera</strong>
                </div>

                <div class="card-body" style="min-height: 550px; max-height: 550px; overflow-y: auto;">

                    <livewire:dashboard.appointments.list-appointments-cards lazy />

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <strong>Empleados</strong>
                </div>

                <div class="container">
                    <livewire:dashboard.board.employee-component lazy />
                </div>

            </div>
        </div>
    </div>

    @push('css')
    <style>

        @keyframes titilar {
            0% {
                color: black;
            }

            50% {
                color: red;
            }

            100% {
                color: black;
            }
        }

        .titulo-titilante {
            animation: titilar 1s infinite;
        }

        .btn-add-service {
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .service-container:hover .btn-add-service {
            visibility: visible;
            cursor: pointer;
            opacity: 1;
        }
    </style>
    @endpush

</div>
