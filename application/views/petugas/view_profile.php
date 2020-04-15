<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('petugas'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
        <div class="row">
            <div class="card col-md-12" style="max-width: 400px;">
                <div class="row no-gutters">
                    <div class="col-lg">
                        <div class="card-body">
                            <h4 class="card-title text-center text-dark">View Profile</h4>
                            <div class="card-body">
                                <img src="<?= base_url('assets/img/profile/') . $get_masyarakat['image']; ?>" class="img-fluid rounded-circle mx-auto d-block" style="width: 100px; height:100px;">
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive text-center">
                                    <tr>
                                        <th scope="row">NIK</th>
                                        <td><?= $get_masyarakat['nik']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama</th>
                                        <td><?= $get_masyarakat['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Username</th>
                                        <td><?= $get_masyarakat['username']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td><?= $get_masyarakat['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Telepon</th>
                                        <td><?= $get_masyarakat['telp']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>