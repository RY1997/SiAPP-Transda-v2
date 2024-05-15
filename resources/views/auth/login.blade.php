<!DOCTYPE html>
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
    <title>SiAPP Transda | Login</title>
</head>

<body data-sidebartype="mini-sidebar">
    <!-- Preloader -->
    <div class="preloader" style="display: none;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/BPKP_Logo.png" alt="loader" class="lds-ripple img-fluid">
    </div>
    <div id="main-wrapper">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="https://bootstrapdemos.wrappixel.com/monster/dist/main/index.html" class="align-items-center d-flex justify-content-center logo-img mb-5 text-center text-nowrap w-100">
                                    <img class="mx-3" src="https://upload.wikimedia.org/wikipedia/commons/1/11/BPKP_Logo.png" width="100">
                                    <h3 class="text-dark fw-bold mb-0">SiAPP Transda</h3>
                                </a>
                                <form method="post" action="{{ url('/login') }}">
                                    @csrf
                                    <div class="mb-2">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username">
                                        @error('username')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                        @error('password')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="jenis_tkd" class="form-label">Jenis TKD</label>
                                        <select class="form-control @error('jenis_tkd') is-invalid @enderror" id="jenis_tkd" name="jenis_tkd">
                                            <option selected disabled>Pilih</option>
                                            <option value="Dana Otonomi Khusus">Dana Otonomi Khusus</option>
                                            <option value="Dana Alokasi Umum">Dana Alokasi Umum</option>
                                            <option value="Dana Alokasi Khusus">Dana Alokasi Khusus</option>
                                            <option value="Dana Bagi Hasil">Dana Bagi Hasil</option>
                                        </select>
                                        @error('jenis_tkd')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 my-4 rounded-2">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/js/theme/app.init.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/js/theme/theme.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/js/theme/app.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/monster/dist/assets/js/theme/sidebarmenu.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>


</body>

</html>