                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <a class="breadcrumb-item text-info" href="<?= base_url('administrator') ?>">Dashboard</a>
                            <li class="breadcrumb-item active">Administrator</li>
                        </ol>
                    </nav>

                    <!-- CARD -->
                    <div class="row">
                        <div class="col-md-3 mt-2">
                            <a href="<?= base_url('administrator/pengaduan'); ?>" class="card card-link o-hidden shadow border-bottom-info">
                                <div class="card-header bg-info text-white">Jumlah Pengaduan</div>
                                <div class="card-body bg-white text-info h4">
                                    <i class="fas fa-paper-plane"> <?= count($pengaduan); ?> </i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mt-2">
                            <a href="<?= base_url('administrator/kategori'); ?>" class="card card-link o-hidden shadow border-bottom-warning">
                                <div class="card-header bg-warning text-white">Jumlah Kategori</div>
                                <div class="card-body bg-white text-warning h4">
                                    <i class="fas fa-tags"> <?= count($petugas); //hitung jumlah array  
                                                            ?></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mt-2">
                            <a href="<?= base_url('administrator/selesai'); ?>" class="card-link card o-hidden shadow border-bottom-success">
                                <div class="card-header bg-success text-white">Selesai</div>
                                <div class="card-body bg-white text-success h4">
                                    <i class="fas fa-check-double"> <?= count($selesai); ?> </i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mt-2">
                            <a href="<?= base_url('administrator/proses'); ?>" class="card-link card o-hidden shadow border-bottom-danger">
                                <div class="card-header bg-danger text-white">Proses</div>
                                <div class="card-body bg-white text-danger h4">
                                    <i class="fas fa-exclamation-circle"> <?= count($proses); ?> </i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- PROSES  -->
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-header text-danger text-center h4">
                                    <i class="fas fa-exclamation-circle"> Pengaduan</i>
                                </div>
                                <div class="card-body">
                                    <div class="strong text-dark">
                                        <b>Berikut beberapa pengaduan masyarakat yang belum di proses : </b>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table p-4" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nomor</th>
                                                    <th>Tanggal</th>
                                                    <th>NIK</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Judul</th>
                                                    <th>Isi</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($join as $p) : ?>
                                                        <td><?= $no++; ?></td>
                                                        <td><?php $waktu = $p['tgl_pengaduan']; ?>
                                                            <?= date('d M Y', $waktu); ?>
                                                        </td>
                                                        <td><?= $p['nik']; ?></td>
                                                        <td><?= $p['nama']; ?></td>
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
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->