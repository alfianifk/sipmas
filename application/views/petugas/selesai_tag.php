<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('petugas'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Selesai </li>
        </ol>
    </nav>

    <div class="row mb-4">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-header h4 text-dark text-center">
                    <i class="fa">Data Pengaduaan <?= $user['status_petugas']; ?> yang Sudah Selesai</i>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table p-4 table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Gambar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $no = 1; ?>
                                    <?php foreach ($selesai as $s) : ?>
                                        <td><?= $no++; ?></td>
                                        <td><?= $s['nik']; ?></td>
                                        <td><?= $s['nama']; ?></td>
                                        <td><?php $waktu = $s['tgl_pengaduan']; ?>
                                            <?= date('d M Y', $waktu); ?>
                                        </td>
                                        <td><?= $s['kategori']; ?></td>
                                        <td><?= $s['judul_pengaduan']; ?></td>
                                        <td><?= $s['isi_pengaduan']; ?></td>
                                        <td><img class="img-thumbnail" style="max-width: 50px;" src="<?= base_url('assets/img/pengaduan/') . $s['foto']; ?>"></td>
                                        <td>
                                            <?php if ($s['status'] == "pending") : ?>
                                                <div class="badge badge-danger">
                                                    <?= $s['status']; ?>
                                                </div>
                                            <?php elseif ($s['status'] == "ps") : ?>
                                                <div class="badge badge-info">
                                                    <?= $s['status']; ?>
                                                </div>
                                            <?php else : ?>
                                                <div class="badge badge-success">
                                                    <?= $s['status']; ?>
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