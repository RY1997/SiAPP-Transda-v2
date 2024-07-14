<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@stack('page_title') | SIAPP Transda</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

    <link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">

    <link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard-bs4/assets/css/argon.min.css?v=1.2.0" type="text/css">

    <style>
        .table th,
        .table td {
            word-wrap: break-word;
            white-space: normal;            
        }
    </style>

    @stack('third_party_stylesheets')

    @stack('page_css')

</head>

<body>
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">

            <div class="sidenav-header align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="{{ asset('assets/logo.png') }}" class="navbar-brand-img" style="max-height: 4rem !important;" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    @include('layouts.menu')
                </div>
            </div>
        </div>
    </nav>

    <div class="main-content" id="panel">

        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center ml-md-0">
                        <li class="nav-item d-xl-none">
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <h1 class="text-white d-inline-block mb-0">@stack('page_title')</h1>

                    <ul class="navbar-nav align-items-center ml-auto ml-md-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/img/theme/team-4.jpg">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Pengaturan User</h6>
                                </div>
                                <a href="{{ route('users.edit', Auth::user()->id) }}" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Ubah Password</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ni ni-user-run"></i>
                                    <span>Keluar</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    @yield('header')
                </div>
            </div>
        </div>

        <div class="container-fluid mt--6" style="min-height: 65vh;">

            @yield('content')

        </div>

        <div class="container-fluid">
            <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-10">
                        <div class="copyright text-center  text-lg-left  text-muted">
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Direktorat Pengawasan Akuntabilitas Program Lintas Sektoral Pembangunan Daerah</a>
                            <a>&copy; 2024</a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <ul class="nav nav-footer text-center justify-content-lg-end text-muted">
                            <a>Versi 2.1 beta</a>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>

    </div>


    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/chart.js/dist/Chart.extension.js"></script>

    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/js/argon.min.js?v=1.2.0"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8a2a23c15c17b5cf","serverTiming":{"name":{"cfL4":true}},"version":"2024.6.1","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>

    @stack('third_party_scripts')

    @stack('page_scripts')

</body>

</html>