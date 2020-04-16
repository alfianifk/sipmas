<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('masyarakat'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
    <div class="container-fluid">

        <?= $this->session->flashdata('message'); ?>
            <div class="row">
                <div class="card col-md-6" style="max-width: 400px;">
                    <div class="row no-gutters">
                        <div class="col-lg">
                            <div class="card-body">
                                <h4 class="card-title text-center">Profile</h4>
                                <div class="card-body">
                                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-fluid rounded-circle mx-auto d-block" style="width: 100px; height:100px;">
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive text-center">
                                        <tr>
                                            <th scope="row">NIK</th>
                                            <td><?= $user['nik']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nama</th>
                                            <td><?= $user['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Username</th>
                                            <td><?= $user['username']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td><?= $user['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Telepon</th>
                                            <td><?= $user['telp']; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>