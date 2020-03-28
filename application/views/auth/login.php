<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5 pt-0">
            <div class="card o-hidden shadow-lg my-5 border-bottom-info">
                <div class=" card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <div class="h5 text-gray-900 m-0">LOGIN</div>
                                <hr>
                            </div>
                            <div class="text-center">
                                <?= $this->session->flashdata('pesan'); ?>
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Email atau Username" value="<?= set_value('email'); ?>">
                                    <?= form_error('username', '<small class="pl-2 text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    <?= form_error('password', '<small class="pl-2 text-danger">', '</small>'); ?>
                                </div>
                                <button type="submit" href="<?= base_url('auth'); ?>" class="btn btn-info btn-user btn-block">Login</button>
                                <hr>
                                <div class="text-center mb-2">
                                    <a href="<?= base_url('auth/registrasi'); ?>" class="small text-info">Belum mempunyai akun? Registrasi sekarang!</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>