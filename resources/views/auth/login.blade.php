<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | SIAPP Transda</title>


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

</head>

<body class="bg-default">

    <div class="main-content">

        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>

        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <img src="{{ asset('assets/logo.png') }}" style="max-height: 4rem !important;" alt="SIAPP Transda">
                            </div>
                            <form role="form" method="post" action="{{ url('/login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                        </div>
                                        <input class="form-control @error('username') is-invalid @enderror" placeholder="Username" type="text" name="username">
                                        @error('username')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control @error('password') is-invalid @enderror" placeholder="Password" type="password" name="password">
                                        @error('password')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <select class="form-control @error('jenis_tkd') is-invalid @enderror" id="jenis_tkd" placeholder="Jenis TKD" name="jenis_tkd">
                                            <option selected disabled>Pilih Jenis TKD</option>
                                            <option value="Dana Otonomi Khusus">Dana Otonomi Khusus</option>
                                            <option value="Dana Alokasi Umum">Dana Alokasi Umum</option>
                                            <option value="Dana Alokasi Khusus">Dana Alokasi Khusus</option>
                                            <option value="Dana Bagi Hasil">Dana Bagi Hasil</option>
                                        </select>
                                        @error('jenis_tkd')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
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
        </div>
    </footer>


    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

    <script src="https://demos.creative-tim.com/argon-dashboard-bs4/assets/js/argon.min.js?v=1.2.0"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8a34acc8cd926ba8","serverTiming":{},"version":"2024.6.1","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>

</html>