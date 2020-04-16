<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('masyarakat'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Ubah Profile</li>
        </ol>
    </nav>
        <div class="card ml-5 col-md-5">
                <div class="card-header h4 text-dark text-center">
                    Ubah Profile
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-2">
                                <div class="text-center">
                                </div>
                                <form class="user" method="post" action="">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="NIK" value="<?= $user['nik']; ?>">
                                            <?= form_error('nik', '<small class="pl-3 text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $user['nama']; ?>">
                                            <?= form_error('nama', '<small class="pl-2 text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= $user['username']; ?>">
                                            <?= form_error('username', '<small class="pl-3 text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="email" value="<?= $user['email']; ?>">
                                            <?= form_error('email', '<small class="pl-2 text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="telp" name="telp" placeholder="Nomor Telepon" value="<?= $user['telp']; ?>">
                                        <?= form_error('telp', '<small class="pl-3 text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                            <label class="custom-file-label" for="gambar">Ubah Gambar</label>
                                        </div>
                                    </div>
                                    <button type="submit" href="<?= base_url('masyarakat/updateProfile'); ?>" class="btn btn-dark btn-user btn-block">
                                        Ubah Profile
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>