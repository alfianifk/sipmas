<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('petugas'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Tanggapan</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-6">
            <?php $this->session->flashdata('sukses'); ?>
            <?= $this->session->flashdata('sukses'); ?>
            <div class="card">
                <h5 class="card-header text-center">Tanggapi Pengaduan
                </h5>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="tanggapan">Tanggapan <sup class="text-danger">*</sup></label>
                            <textarea class="form-control" name="tanggapan">
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-dark float-right mt-4">Kirim tanggapan!</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <h5 class="card-header text-center">Review Pengaduan
                </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?= date('D, d M Y', $get_pengaduan['tgl_pengaduan']); ?>
                            <br>
                            <br>
                            Nama : <b> <?= $get_pengaduan['nama']; ?> </b>
                            <br>
                            Judul : <?= $get_pengaduan['judul_pengaduan']; ?>
                            <br> <br>
                            <p><?= $get_pengaduan['isi_pengaduan']; ?></p>
                        </div>
                        <div class="col-lg-6">
                            <img src="<?= base_url('assets/img/pengaduan/') . $get_pengaduan['foto']; ?>" class="img-thumbnail" title="Gambar Pengaduan">
                            <br>
                            <?php if ($get_pengaduan['status'] == "proses") : ?>
                                Status :
                                <div class="text-warning">
                                    <b> <?= ucfirst($get_pengaduan['status']); ?> </b>
                                </div>
                            <?php elseif ($get_pengaduan['status'] == "selesai") : ?>
                                Status :
                                <div class="text-success">
                                    <b> <?= ucfirst($get_pengaduan['status']); ?> </b>
                                </div>
                            <?php else : ?>
                                Status :
                                <div class="text-danger">
                                    <b> <?= ucfirst($get_pengaduan['status']); ?> </b>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <a href="<?= base_url('petugas/view/'); ?><?= $get_pengaduan['nik'];?>" class="btn btn-dark">Lihat profile</a>
                </div>
            </div>
        </div>
    </div>