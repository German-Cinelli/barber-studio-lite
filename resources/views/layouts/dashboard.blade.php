<!DOCTYPE html><!--
    * CoreUI - Free Bootstrap Admin Template
    * @version v4.2.2
    * @link https://coreui.io/product/free-bootstrap-admin-template/
    * Copyright (c) 2023 creativeLabs Łukasz Holeczek
    * Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
    -->
<html lang="es">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>{{ isset($title) ? $title : 'Administración' }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('coreui/assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('coreui/assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('coreui/assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('coreui/assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('coreui/assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('coreui/assets/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('coreui/assets/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('coreui/assets/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('coreui/assets/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('coreui/assets/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('coreui/assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('coreui/assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('coreui/assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('coreui/assets/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('coreui/assets/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <!--<link rel="stylesheet" href="{{ asset('coreui/vendors/simplebar/css/simplebar.css') }}">-->
    <link rel="stylesheet" href="{{ asset('coreui/css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ asset('coreui/css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="{{ asset('coreui/css/examples.css') }}" rel="stylesheet">
    <link href="{{ asset('coreui/vendors/@coreui/icons/css/free.min.css') }}" rel="stylesheet">
    <link href="{{ asset('coreui/css/custom.css') }}" rel="stylesheet">
    @stack('css')
    @livewireStyles
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">

            <div class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <img src="{{ asset('coreui/assets/img/coderstrike/coderstrike_horizontal.png') }}" width="250px" alt="">
            </div>
            <div class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <img src="{{ asset('coreui/assets/img/coderstrike/coderstrike_isotipo.png') }}" width="64px" alt="">
            </div>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">

            <li class="nav-title">Menu</li>

            <!-- home -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-home') }}"></use>
                    </svg>
                    Inicio
                </a>
            </li>

            <!-- board -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.board') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                    </svg>
                    Tablero
                </a>
            </li>

            <!-- employees -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.employees') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                    </svg>
                    Empleados
                </a>
            </li>

            <!-- users -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.users') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-people') }}"></use>
                    </svg>
                    Usuarios
                </a>
            </li>

            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="javascript:void(0)">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-notes') }}"></use>
                    </svg>
                    Agenda
                </a>
                <ul class="nav-group-items">

                    <!-- create-appointment -->
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="javascript:void(0)">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-plus') }}">
                                </use>
                            </svg>
                            Nueva <span class="badge badge-sm bg-danger ms-auto">PRO</span>
                        </a>
                    </li>

                    <!-- appointments -->
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="{{ route('dashboard.appointments') }}">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-list') }}">
                                </use>
                            </svg>
                            Listado
                        </a>
                    </li>

                </ul>
            </li>

            <!-- orders -->
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-calculator') }}"></use>
                    </svg>
                    Tickets <span class="badge badge-sm bg-danger ms-auto">PRO</span>
                </a>
            </li>


            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="javascript:void(0)">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-border-all') }}"></use>
                    </svg>
                    Artículos
                </a>
                <ul class="nav-group-items">

                    <!-- item.create -->
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="javascript:void(0)">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-plus') }}">
                                </use>
                            </svg>
                            Nuevo <span class="badge badge-sm bg-danger ms-auto">PRO</span>
                        </a>
                    </li>

                    <!-- item.create -->
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="{{ route('dashboard.categories') }}">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-clone') }}">
                                </use>
                            </svg>
                            Categorías
                        </a>
                    </li>

                    <!-- products -->
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="javascript:void(0)">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-tags') }}">
                                </use>
                            </svg>
                            Productos <span class="badge badge-sm bg-danger ms-auto">PRO</span>
                        </a>
                    </li>

                     <!-- services -->
                     <li class="nav-item ms-2">
                        <a class="nav-link" href="{{ route('dashboard.services') }}">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-apps') }}">
                                </use>
                            </svg>
                            Servicios
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="javascript:void(0)">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-screen-desktop') }}"></use>
                    </svg>
                    Landing
                </a>
                <ul class="nav-group-items">

                    <!-- config -->
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="javascript:void(0)">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-settings') }}">
                                </use>
                            </svg>
                            Configuración <span class="badge badge-sm bg-danger ms-auto">PRO</span>
                        </a>
                    </li>

                    <!-- styles -->
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="javascript:void(0)">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-color-palette') }}">
                                </use>
                            </svg>
                            Estilos <span class="badge badge-sm bg-danger ms-auto">PRO</span>
                        </a>
                    </li>

                    <!-- config images -->
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="javascript:void(0)">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-image') }}">
                                </use>
                            </svg>
                            Imagenes <span class="badge badge-sm bg-danger ms-auto">PRO</span>
                        </a>
                    </li>

                    <!-- instagram -->
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="javascript:void(0)">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/brand.svg#cib-instagram') }}">
                                </use>
                            </svg>
                            Instagram <span class="badge badge-sm bg-danger ms-auto">PRO</span>
                        </a>
                    </li>

                    <!-- sponsors -->
                    <li class="nav-item ms-2">
                        <a class="nav-link" href="javascript:void(0)">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-fire') }}">
                                </use>
                            </svg>
                            Sponsors <span class="badge badge-sm bg-danger ms-auto">PRO</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item mt-auto">
                <a class="nav-link" href="{{ url('/') }}" target="_blank">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-screen-smartphone') }}">
                        </use>
                    </svg>
                    Abrir sitio web
                    <span class="badge badge-sm bg-dark ms-auto">
                        <i class="cil-external-link text-white"></i>
                    </span>
                </a>
            </li>
        </ul>

        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                    </svg>
                </button>

                <a class="header-brand d-md-none" href="#">
                    <img src="{{ asset('coreui/assets/img/coderstrike/coderstrike_horizontal_blue_sin_fondo.png') }}" width="200px" alt="coderstrike logo">
                </a>

                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-md">
                            <img class="avatar-img" src="{{ asset('storage/users/' . Auth::user()->image) }}" alt="Avatar"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Configuración</div>
                            </div>
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <svg class="icon me-2">
                                    <use
                                        xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-user') }}">
                                    </use>
                                </svg> Mi cuenta
                            </a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}">
                                <svg class="icon me-2">
                                    <use
                                        xlink:href="{{ asset('coreui/vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}">
                                    </use>
                                </svg> Cerrar sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">

                @if(request()->route()->getName() != 'dashboard')
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb my-0 ms-2">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
                            @yield('nav-content')
                        </ol>
                    </nav>
                @endif

                @yield('button-in-tab')
            </div>
        </header>

        <div class="body flex-grow-1 px-3">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
            <div>
                <a href="https://coreui.io" style="text-decoration: none; color: #3498DB" target="_blank">BarberStudio</a>
                © {{ date('Y') }}
            </div>
            <div class="ms-auto">
                Desarrollado por
                <a href="https://coderstrike.com" target="_blank" style="text-decoration: none; color: #3498DB">
                    coderstrike
                </a>
            </div>
        </footer>

        <!-- templates -->
        <div class="toast-container position-fixed top-0 end-0 p-3">
            @include('partials.toast-notification')
        </div>
        <!-- end-templates -->

    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('coreui/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    <!--<script src="{{ asset('coreui/vendors/@coreui/utils/js/coreui-utils.js') }}"></script>-->
    <!--<script src="{{ asset('coreui/js/main.js') }}"></script>-->

    <!-- toasts -->
    <!--<script src="{{ asset('coreui/js/toasts.js') }}"></script>-->

    <script src="{{ asset('coreui/js/toasts-init.js') }}"></script>

    <script src="{{ asset('coreui/js/tooltips.js') }}"></script>

    <script>
        /*window.addEventListener('openModal', event => {

                    const modalElement = document.getElementById(event.detail.modal);
                    console.log(modalElement)
                    if (modalElement) {
                        modalElement.classList.add('show');
                        modalElement.style.display = 'block';
                    }
                });*/
    </script>

    <script>
        window.addEventListener('closeModal', event => {
            var modal = event.detail[0].modal;
            document.getElementById(modal).style.display = "none";
            document.querySelector('.modal-backdrop').remove();
        });
    </script>

    @stack('js')
    @livewireScripts
</body>

</html>
