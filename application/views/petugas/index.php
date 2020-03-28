                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <a class="breadcrumb-item text-info" href="<?= base_url('petugas') ?>">Dashboard</a>
                            <li class="breadcrumb-item active">Petugas</li>
                        </ol>
                    </nav>

                    <!-- CARD -->
                    <div class="row">
                        <div class="col-md-4 mt-2">
                            <a href="<?= base_url('petugas/pengaduan'); ?>" class="card card-link o-hidden shadow border-bottom-info">
                                <div class="card-header bg-info text-white">Jumlah Pengaduan <?= $user['status_petugas']; ?></div>
                                <div class="card-body bg-white text-info h4">
                                    <i class="fas fa-paper-plane"> <?= count($pengaduan); ?> </i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mt-2">
                            <a href="<?= base_url('petugas/selesai'); ?>" class="card-link card o-hidden shadow border-bottom-success">
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
                            <a href="<?= base_url('petugas/proses'); ?>" class="card-link card o-hidden shadow border-bottom-danger">
                                <div class="card-header bg-danger text-white">Proses</div>
                                <div class="card-body bg-white text-danger h4">
                                    <div class="spinner-grow text-danger" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="text-danger float-right">
                                        <?php if ($proses != 0) : ?>
                                            <?= count($proses); ?>
                                        <? else : ?>
                                            <?= 0; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- PROSES  -->
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-header text-center bg-white text-danger text-center h4">
                                    <i class="fas fa-exclamation-circle"> Peringatan</i>
                                </div>
                                <div class="card-body shadow">
                                    <div class="strong text-dark">
                                        <b>Berikut beberapa pengaduan kepada <span class="text-success"><?= $user['status_petugas']; ?></span> yang belum di proses : </b>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table p-4 table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th scope="row">Nomor</th>
                                                    <th scope="row">Tanggal</th>
                                                    <th scope="row">NIK</th>
                                                    <th scope="row">Nama</th>
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
                                                <?php $no = 1; ?>
                                                <?php foreach ($pengaduan as $p) : ?>
                                                    <td><?= $no++; ?></td>
                                                    <td><?php $waktu = $p['tgl_pengaduan']; ?>
                                                        <?= date('d M Y', $waktu); ?>
                                                    </td>
                                                    <td><?= $p['nik']; ?></td>
                                                    <td><?= $p['nama']; ?></td>
                                                    <td><?= $p['kategori']; ?></td>
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