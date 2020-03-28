<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php echo $title; ?> </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>home.css" rel="stylecheet">

</head>

<body>

    <!-- NAVBAR SECTION -->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent top-fixed">
            <div class="container">
                <i class="navbar-brand text-dark fas fa-fw fa-users"></i>
                <a class="navbar-brand text-dark"> Pengaduan Masyarakat </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="text-white fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-dard" href=" <?= base_url('auth'); ?> ">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href=" <?= base_url('auth/registrasi/'); ?> ">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- HERO SECTION -->
    <div class="jumbotron" style="height: 900px; background-size:cover; background-image: url(<?= base_url('assets/img/desktop.jpg'); ?>)">
        <div class="container">
            <div class="row mt-5 text-center">
                <div class="col">
                    <div class="h1 text-white" style="text-shadow: 1px 3px 1px #000; margin-bottom: 0px;">
                        Sistem Pengaduan Masyarakat <br>
                        Desa Singkir
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Dibuat dengan <i class="fas fa-heart"> AlfianiFk</i> </span>
            <span>Copyright &copy; Sistem Pengaduan Masyarakat
                <?= date("Y"); ?></span>
        </div>
    </div>
</footer>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>