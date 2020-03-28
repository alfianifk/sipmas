<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('masyarakat'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Selesai</li>
        </ol>
    </nav>
    <div class="container-fluid">

        <div class="row">
            <div class="card col-md-12">
                <div class="row no-gutters">
                    <div class="col-lg">
                        <div class="card-body">
                            <h4 class="card-title text-center">Selesai</h4>
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
                                            <?php foreach ($selesaiPengaduan as $selesai) : ?>
                                                <td><?php $waktu = $selesai['tgl_pengaduan']; ?>
                                                    <?= date('d M Y', $waktu); ?>
                                                </td>
                                                <td><?= $selesai['id_kategori']; ?></td>
                                                <td><?= $selesai['judul_pengaduan']; ?></td>
                                                <td><?= $selesai['isi_pengaduan']; ?></td>
                                                <td><img class="img-thumbnail" style="max-width: 50px;" src="<?= base_url('assets/img/pengaduan/') . $selesai['foto']; ?>"></td>
                                                <td>
                                                    <?php if ($selesai['status'] == "pending") : ?>
                                                        <div class="badge badge-danger">
                                                            <?= $selesai['status']; ?>
                                                        </div>
                                                    <?php elseif ($selesai['status'] == "prosess") : ?>
                                                        <div class="badge badge-info">
                                                            <?= $selesai['status']; ?>
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="badge badge-success">
                                                            <?= $selesai['status']; ?>
                                                        </div>
                                                    <?php endif; ?>
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