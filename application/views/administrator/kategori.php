<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4">
            <a class="breadcrumb-item text-info" href="<?= base_url('administrator'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Kategori</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header h4 text-dark text-center">
                    <i class="fa">Kategori</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table p-5">
                            <thead class="thead strong text-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Petugas</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($kategori as $k) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $k['nama_petugas']; ?></td>
                                        <td><?= $k['kategori']; ?></td>
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