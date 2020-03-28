<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('masyarakat'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Proses</li>
        </ol>
    </nav>
    <div class="container-fluid">

        <div class="row">
            <div class="card col-md-10">
                <div class="row no-gutters">
                    <div class="col-lg">
                        <div class="card-body">
                            <h4 class="card-title text-center">Proses</h4>
                            <div class="card-body">
                                <table class="table table-responsive">
                                    <tr>
                                        <th scope="row">Tanggal</th>
                                        <th scope="row">Kategori</th>
                                        <th scope="row">Judul</th>
                                        <th scope="row">Isi</th>
                                        <th scope="row">Gambar</th>
                                        <th scope="row">Status</th>
                                        <th scope="row">Aksi</th>

                                    </tr>
                                    <tr>
                                        <?php foreach ($prosesPengaduan as $proses) : ?>
                                            <td><?php $waktu = $proses['tgl_pengaduan']; ?>
                                                <?= date('d M Y', $waktu); ?>
                                            </td>
                                            <td><?= $proses['id_kategori']; ?></td>
                                            <td><?= $proses['judul_pengaduan']; ?></td>
                                            <td><?= $proses['isi_pengaduan']; ?></td>
                                            <td><img class="img-thumbnail" style="max-width: 50px;" src="<?= base_url('assets/img/pengaduan/') . $proses['foto']; ?>"></td>
                                            <td>
                                                <?php if ($proses['status'] == "pending") : ?>
                                                    <div class="badge badge-danger">
                                                        <?= $proses['status']; ?>
                                                    </div>
                                                <?php elseif ($proses['status'] == "prosess") : ?>
                                                    <div class="badge badge-info">
                                                        <?= $proses['status']; ?>
                                                    </div>
                                                <?php else : ?>
                                                    <div class="badge badge-success">
                                                        <?= $proses['status']; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="" class="badge badge-warning">detail</a>
                                            </td>
                                    </tr>
                                <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>