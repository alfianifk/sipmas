                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <a class="breadcrumb-item text-info" href="<?= base_url('masyarakat') ?>">Dashboard</a>
                            <li class="breadcrumb-item active">Masyarakat</li>
                        </ol>
                    </nav>

                    <!-- CARD -->
                    <div class="row">
                        <div class="col-md-4 mt-2">
                            <a href="<?= base_url('masyarakat/selesai'); ?>" class="card-link card o-hidden shadow border-bottom-success">
                                <div class="card-header bg-success text-white">Selesai</div>
                                <div class="card-body bg-white text-success h4">
                                    <i class="fas fa-check-double"></i>
                                    <div class="text-success float-right">
                                        <?php if ($selesai != 0) : ?>
                                            <?= count($selesai); ?>
                                        <? else : ?>
                                            <?= 0; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-2">
                            <a href="<?= base_url('masyarakat/proses'); ?>" class="card-link card o-hidden shadow border-bottom-warning">
                                <div class="card-header bg-warning text-white">Proses</div>
                                <div class="card-body bg-white text-info h4">
                                    <div class="spinner-grow text-warning" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="text-warning float-right">
                                        <?php if ($proses != 0) : ?>
                                            <?= count($proses); ?>
                                        <? else : ?>
                                            <?= 0; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-2">
                            <a href="<?= base_url('masyarakat/pending'); ?>" class="card-link card o-hidden shadow border-bottom-danger">
                                <div class="card-header bg-danger text-white">Pending</div>
                                <div class="card-body bg-white text-danger h4">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <div class="text-danger float-right">
                                        <?php if ($pending != 0) : ?>
                                            <?= count($pending); ?>
                                        <? else : ?>
                                            <?= 0; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- MY PENGADUAN -->
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-header h4 text-dark text-center">
                                    <i class="fa">Pengaduan-Ku</i>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table p-4" width="100%" cellspacing="0">
                                            <thead class="thead strong text-dark">
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Kategori</th>
                                                    <th>Judul</th>
                                                    <th>Isi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php foreach ($pengaduan as $p) : ?>
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
                                                        <td>
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
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->