<div class="container-fluid">
    <div class="text-dark m-2"><?= date('l, d M Y'); ?></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a class="breadcrumb-item text-info" href="<?= base_url('administrator'); ?>">Dashboard</a>
            <li class="breadcrumb-item active">Daftarkan Admin Baru</li>
        </ol>
    </nav>

    <div class="row mt-3">
            <div class="col-lg-6 pt-0">
                <div class="card o-hidden shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <div class="h5 text-gray-900 m-0">Daftarkan Admin Baru</div>
                                        <hr class="garis">
                                    </div>
                                    <div class="text-center">
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>
                                    <form class="user" method="post" action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="pl-3 text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                            </div>
                                            <?= form_error('password1', '<small class="pl-4 text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="telp" name="telp" placeholder="Nomor Telepon" value="<?= set_value('telp'); ?>">
                                            <?= form_error('telp', '<small class="pl-3 text-danger">', '</small>'); ?>
                                        </div>
                                        <button type="submit" href="<?= base_url('auth/registrasi'); ?>" class="btn btn-dark btn-user btn-block">
                                            Registrasi
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
        </div>
</div>
