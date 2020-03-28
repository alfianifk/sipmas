<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4">
            <a class="breadcrumb-item text-info" href="<?= base_url('administrator'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Masyarakat</li>
        </ol>
    </nav>

    <div class="row mb-4">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-header h4 text-dark text-center">
                    <i class="fa">Masyarakat</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered pl-4">
                            <thead class="thead strong text-dark">
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Telepon</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($masyarakat as $m) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $m['nik']; ?></td>
                                        <td><?= $m['nama']; ?></td>
                                        <td><?= $m['email']; ?></td>
                                        <td><?= $m['username']; ?></td>
                                        <td><?= $m['telp']; ?></td>
                                        <td>
                                            <img src="<?= base_url('assets/img/profile/') . $m['image']; ?>" class="img-fluid" style="max-width: 50px;">
                                        </td>
                                        <td>
                                            <div class="dropdown show">
                                                <a class="badge badge-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"> Aksi
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item text-dark " href="#"> <i class="fas fa-user"></i> Detail</a>
                                                    <a class="dropdown-item text-danger" href="#"> <i class="fas fa-trash"></i> Banned</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>