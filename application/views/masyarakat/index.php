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

                    <div class="row">
                        <div class="mt-3 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-center"> Pengaduan-Ku </h4>
                                    <table id="tabel" width="100%" cellspacing="0" class="table table-responsive">
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
                                            <?php foreach ($pengaduan as $p) : ?>
                                                <td><?php $waktu = $p['tgl_pengaduan']; ?>
                                                    <?= date('d M Y', $waktu); ?>
                                                </td>
                                                <td><?= $p['id_kategori']; ?></td>
                                                <td><?= $p['judul_pengaduan']; ?></td>
                                                <td><?= $p['isi_pengaduan']; ?></td>
                                                <td><img class="img-thumbnail" style="max-width: 50px;" src="<?= base_url('assets/img/pengaduan/') . $p['foto']; ?>"></td>
                                                <td>
                                                    <?php if ($p['status'] == "pending") : ?>
                                                        <div class="badge badge-danger">
                                                            <?= $p['status']; ?>
                                                        </div>
                                                    <?php elseif ($p['status'] == "prosess") : ?>
                                                        <div class="badge badge-info">
                                                            <?= $p['status']; ?>
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="badge badge-success">
                                                            <?= $p['status']; ?>
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
                                    <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->