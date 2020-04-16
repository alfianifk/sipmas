<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('administrator'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Proses</li>
        </ol>
    </nav>

    <div class="row mb-4">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-header h4 text-dark text-center">
                    <i class="fa">Data Pengaduaan yang Masih di <span class="text-warning"> Proses </span></i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table p-4" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $no = 1; ?>
                                    <?php foreach ($prosesPengaduan as $p) : ?>
                                        <td><?= $no++; ?></td>
                                        <td><?= $p['nik']; ?></td>
                                        <td><?= $p['nama']; ?></td>
                                        <td><?php $waktu = $p['tgl_pengaduan']; ?>
                                            <?= date('d M Y', $waktu); ?>
                                        </td>
                                        <td><?= $p['kategori']; ?></td>
                                        <td><?= $p['judul_pengaduan']; ?></td>
                                        <td><?= $p['isi_pengaduan']; ?></td>
                                        <td>
                                            <?php if ($p['status'] == "pending") : ?>
                                                <div class="badge badge-danger">
                                                    <?= $p['status']; ?>
                                                </div>
                                            <?php elseif ($p['status'] == "proses") : ?>
                                                <div class="badge badge-warning">
                                                    <?= $p['status']; ?>
                                                </div>
                                            <?php else : ?>
                                                <div class="badge badge-success">
                                                    <?= $p['status']; ?>
                                                </div>
                                            <?php endif; ?>
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