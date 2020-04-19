<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css'); ?>">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>img/icon.png" rel="shortcut icon">

    <title>Sistem Pengaduan Masyarakat</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand judul" href="#">Pengaduan Masyarakat</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav sub-judul ml-auto">
                    <a class="nav-item nav-link" href="<?= base_url('auth'); ?>">Login</a>
                    <a class="nav-item nav-link" href="<?= base_url('auth/registrasi'); ?>">Registrasi</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- JUMBOTRON -->
    <div class="container">
        <div class="row mt-5 text-center">
            <div class="col">
                <h1 class="judul">Sistem Pengaduan Masyarakat</h1>
                <h2 class="sub-judul">Kecamatan Cikalong</h2>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 mb-5">
                <h2 class="judul">Selamat datang! <i class="far fa-smile-beam"></i> </h2>
                <h3 class="sub-judul">Masyarakat Kecamatan Cikalong</h3>
                <h6 class="sub-judul">Adukan semua keluhan Anda disini, hal apapun akan kami tanggapi dengan baik</h6>
                <a href="<?= base_url('auth/registrasi'); ?>" class="btn btn-dark sub-judul mt-5">Mulai Mendaftar</a>
                <a href="<?= base_url('auth'); ?>" class="btn btn-info sub-judul ml-2 mt-5">Mulai Mengadu</a>
            </div>
            <div class="col-md-6">
                <img src="<?= base_url('assets/img/hero.svg'); ?>" class="img-fluid ml-5" width="300px">
            </div>
        </div>
        <hr style="border: 1px solid #343A40">
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-8 md-auto text-center">
                <h3 class="judul">Tentang Kami</h3>
            </div>
            <p class="col-5 md-auto text-center sub-judul"> Kami adalah sistem untuk melayani semua keluhan Anda, Khususnya daerah Kecamatan Cikalong dan sekitarnya. Dimulai dari kategori Infrastruktur, Keamanan, Kesehatan, Pendidikan dan Kesejahteraan. Tanpa dipungut biaya apapun, alias Gratis! </p>

        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-8 md-auto text-center">
                <img src="<?= base_url('assets/img/1.svg'); ?>" class="img-fluid mx-auto d-block" width="500px">
            </div>
        </div>

        <!-- KATEGORI -->
        <section id="kategori">

            <div class="row justify-content-center">
                <div class="col-4 md-auto text-center">
                    <hr style="border: 1px solid #343A40" class="mt-5">
                    <h3 class="judul">Kategori</h3>
                    <p class="sub-judul">Berikut adalah beberapa kategori yang bisa anda adukan disini</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4 md-auto text-center">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <img src="<?= base_url('assets/img/kategori/kesehatan.svg'); ?>" class="card-img rounded">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <p class="card-title judul">Kesehatan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 md-auto text-center">
                    <div class="card mb-3" style="max-width: 500px;">
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <img src="<?= base_url('assets/img/kategori/keamanan.svg'); ?>" class="card-img rounded">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <p class="card-title judul">Keamanan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 md-auto text-center">
                    <div class="card mb-3" style="max-width: 500px;">
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <img src="<?= base_url('assets/img/kategori/pendidikan.svg'); ?>" class="card-img rounded">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <p class="card-title judul">Pendidikan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col md-auto text-center">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <img src="<?= base_url('assets/img/kategori/kesejahteraan.svg'); ?>" class="card-img rounded">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <p class="card-title judul">Kesejahteraan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col md-auto text-center">
                    <div class="card mb-3" style="max-width: 500px;">
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <img src="<?= base_url('assets/img/kategori/1.svg'); ?>" class="card-img rounded">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <p class="card-title judul">Infrastruktur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    </section>


    <!-- FOOTER -->
    <footer class="sticky-footer mt-5">
        <div class="container">
            <div class="copyright text-center sub-judul">
                <span>Dibuat dengan <i class="fas fa-heart"> AlfianiFk</i> </span>
                <span>Copyright &copy; Sistem Pengaduan Masyarakat
                    <?= date("Y"); ?></span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>