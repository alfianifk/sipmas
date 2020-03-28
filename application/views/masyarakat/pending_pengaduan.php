<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('masyarakat'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Pending</li>
        </ol>
    </nav>
    <div class="container-fluid">

        <div class="row">
            <div class="card col">
                <div class="row no-gutters">
                    <div class="col-lg">
                        <div class="card-body">
                            <h4 class="card-title text-center">Pending</h4>
                            <div class="card-body">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="row">Tanggal</th>
                                            <th scope="row">Kategori</th>
                                            <th scope="row">Judul</th>
                                            <th scope="row">Isi</th>
                                            <th scope="row">Gambar</th>
                                            <th scope="row">Status</th>
                                            <th scope="row">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($pendingPengaduan as $pending) : ?>
                                                <td><?php $waktu = $pending['tgl_pengaduan']; ?>
                                                    <?= date('d M Y', $waktu); ?>
                                                </td>
                                                <td><?= $pending['id_kategori']; ?></td>
                                                <td><?= $pending['judul_pengaduan']; ?></td>
                                                <td><?= $pending['isi_pengaduan']; ?></td>
                                                <td><img class="img-thumbnail" style="max-width: 50px;" src="<?= base_url('assets/img/pengaduan/') . $pending['foto']; ?>"></td>
                                                <td>
                                                    <?php if ($pending['status'] == "pending") : ?>
                                                        <div class="badge badge-danger">
                                                            <?= $pending['status']; ?>
                                                        </div>
                                                    <?php elseif ($pending['status'] == "prosess") : ?>
                                                        <div class="badge badge-info">
                                                            <?= $pending['status']; ?>
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="badge badge-success">
                                                            <?= $pending['status']; ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="" class="badge badge-warning">detail</a>
                                                </td>
                                        </tr>
                                    </tbody>

                                <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>