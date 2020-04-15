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
                        <table class="table" width="100%" cellspacing="0">
                            <thead class=" thead strong text-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Petugas</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Telepon</th>
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
                                            <a href="http://" class="btn btn-xl btn-danger"> <i class="fas fa-trash"></i> </a>
                                            <a href="http://" class="btn btn-xl btn-info"> <i class="fas fa-edit"></i> </a>
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