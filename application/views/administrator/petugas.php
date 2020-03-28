<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4">
            <a class="breadcrumb-item text-info" href="<?= base_url('administrator'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Petugas</li>
        </ol>
    </nav>

    <div class="row mb-4">
        <div class="col-lg">
            <div class="row mb-4">
                <div class="col">
                    <a href="#" class="btn btn-info float-right">Tambah Data Petugas <i class="fa fa-plus"></i> </a>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-header h4 text-dark text-center">
                    <i class="fa">Petugas</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead class=" thead strong text-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Petugas</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Telepon</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($kategori as $k) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $k['nama_petugas']; ?></td>
                                        <td><?= $k['status_petugas']; ?></td>
                                        <td><?= $k['email']; ?></td>
                                        <td><?= $k['username']; ?></td>
                                        <td><?= $k['telp']; ?></td>
                                        <td>
                                            <img src="<?= base_url('assets/img/profile/') . $k['image']; ?>" class="img-fluid" style="max-width: 50px;">
                                        </td>
                                        <td>
                                            <div class="dropdown show">
                                                <a class="badge badge-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"> Aksi
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item text-dark " href="#"> <i class="fas fa-user"></i> Detail</a>
                                                    <a class="dropdown-item text-danger" href="#"> <i class="fas fa-trash"></i> Hapus</a>
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