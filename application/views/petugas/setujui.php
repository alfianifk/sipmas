<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('petugas'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Setujui Pengaduan </li>
        </ol>
    </nav>
    <div class="card-group">
    <?php foreach($setujui as $s) : ?>
        <div class="card">
            <img src="<?= base_url('assets/img/pengaduan/').$s['foto']; ?>" class="card-img-top" style="max-width: 200px">
            <div class="card-body">
                <h5 class="card-title"><?= $s['judul_pengaduan']; ?></h5>
                <p class="card-text"><b><?= $s['nama']; ?></b> <br>
                Status : <?= $s['status']; ?>
                </p>
                <p class="card-text"><?= $s['isi_pengaduan']; ?></p>
                <div class="card bg-dark">
                    <p class="card-body text-white">
                        <?= $s['tanggapan'];?>
                    </p>
                    <div class="card-footer">
                <small class="text-muted">Pengaduan ini ditanggapi oleh petugas pada : <?= $s['update_at']; ?></small>
            </div>
                </div>
            </div>
            <div class="card-footer">
                <small class="text-muted">Pengaduan ini di post pada tanggal <?= date("d M Y", $s['tgl_pengaduan']); ?></small>
            </div>
        </div>
    <?php endforeach; ?>
    </div>