<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical" data-boxed-layout="boxed" data-card="shadow">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/1/11/BPKP_Logo.png">

    <!-- Core Css -->
    <link rel="stylesheet" href="https://bootstrapdemos.wrappixel.com/monster/dist/assets/css/styles.css">
    <title>SiAPP Transda</title>

    <link rel="stylesheet" href="https://bootstrapdemos.wrappixel.com/monster/dist/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    @stack('third_party_stylesheets')

    @stack('page_css')
</head>

<body data-sidebartype="mini-sidebar">
    <!-- Preloader -->
    <div class="preloader" style="display: none;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/BPKP_Logo.png" alt="loader" class="lds-ripple img-fluid">
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        @include('layouts.sidebar')
        <!--  Sidebar End -->
        <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar">
                <div class="with-vertical">
                    <!-- ---------------------------------- -->
                    <!-- Start Vertical Layout Header -->
                    <!-- ---------------------------------- -->
                    <nav class="navbar navbar-expand-lg p-0">
                        <!-- <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                    <iconify-icon icon="solar:hamburger-menu-linear"></iconify-icon>
                                </a>
                            </li>
                        </ul> -->

                        <div class="d-block d-lg-none">
                            <img src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/images/logos/light-logo.svg" class="" width="180" alt="">
                        </div>
                        <a class="navbar-toggler border-0 text-white nav-icon-hover" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <iconify-icon icon="solar:menu-dots-bold" class="fs-7"></iconify-icon>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between">
                                <ul class="navbar-nav flex-row ms-auto align-items-center text-center">
                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item hover-dd dropdown">
                                        <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="user-profile-img">
                                                    <img src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/images/profile/user-1.jpg" class="rounded-circle" width="30" height="30" alt="">
                                                </div>
                                                <p class="mb-0 mx-2">Halo, {{ Auth::user()->name }}</p>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                            <div class="message-body">
                                                <a href="{{ route('users.edit', Auth::user()->id) }}" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                                    <iconify-icon icon="solar:settings-linear"></iconify-icon>
                                                    <p class="mb-0 fs-3">Ganti Password</p>
                                                </a>
                                                <a href="#" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <div class="position-relative">
                                                        <iconify-icon icon="solar:power-bold"></iconify-icon>
                                                    </div>
                                                    <p class="mb-0 fs-3">Keluar</p>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->

                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- ---------------------------------- -->
                    <!-- End Vertical Layout Header -->
                    <!-- ---------------------------------- -->

                    <!-- ------------------------------- -->
                    <!-- apps Dropdown in Small screen -->
                    <!-- ------------------------------- -->

                    <!--  Mobilenavbar -->
                    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <nav class="sidebar-nav scroll-sidebar">
                            <div class="offcanvas-header justify-content-between">
                                <img src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/images/logos/dark-logo.svg" alt="" class="img-fluid">
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body h-n80" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: -16px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 330px; height: 244px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <!--  Header End -->

            @include('layouts.sidebar')

            <div class="body-wrapper">
                <div class="container-fluid" style="min-height: 70vh;">
                    @yield('content')
                </div>

                <div class="container-fluid">
                    <div class="card rounded-2">
                        <div class="card-body text-center row">
                            <small class="fw-semibold">Direktorat Pengawasan Akuntabilitas Program Lintas Sektoral Pembangunan Daerah</small>
                            <small class="fw-normal">SiAPP Transda 2.0 &copy; 2024</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-body h-n80 simplebar-scrollable-y" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: -16px;">
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 16px;">
                                        <div>
                                            <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off">
                                        </div>
                                        <a href="javascript:void(0)" class="fullsidebar">
                                            <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/js/vendor.min.js"></script>
    <!-- Import Js Files -->
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/js/theme/app.init.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/js/theme/theme.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/js/theme/app.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/js/theme/sidebarmenu.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/js/dashboards/dashboard6.js"></script>

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @stack('third_party_scripts')

    @stack('page_scripts')

</body>

</html>