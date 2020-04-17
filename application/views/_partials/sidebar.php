<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center text-white">
        <div class="sidebar-brand-icon">
            <i class="fas fa-users"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIPMAS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php if ($users['role'] == "admin") : ?>
        <!-- ADMIN -->
        <div class="sidebar-heading">
            Administrator
        </div>
        <?php if ($this->uri->segment(2) == "") : ?>
            <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
            <a class="nav-link" href="<?= base_url('administrator'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
            </div>
            <div class="sidebar-heading">
                Settings
            </div>
            <!-- Nav Item - Pages Collapse USERS -->
            <li class="nav-item">
                <a class="nav-link collapsed pb-0" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Users</span>
                </a>
                <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Users</h6>
                        <a class="collapse-item" href="<?= base_url('administrator/petugas'); ?>">Petugas</a>
                        <a class="collapse-item" href="<?= base_url('administrator/admin'); ?>">Admin</a>
                        <a class="collapse-item" href="<?= base_url('administrator/masyarakat'); ?>">Masyarakat</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse PENGADUAN -->
            <li class="nav-item">
                <a class="nav-link collapsed pb-0" href="#" data-toggle="collapse" data-target="#pengaduan" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-exclamation-circle"></i>
                    <span>Pengaduan</span>
                </a>
                <div id="pengaduan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar Pengaduan</h6>
                        <a class="collapse-item" href="<?= base_url('administrator/pengaduan'); ?>">Semua Data Pengaduan</a>
                        <a class="collapse-item" href="<?= base_url('administrator/selesai'); ?>">Selesai</a>
                        <a class="collapse-item" href="<?= base_url('administrator/proses'); ?>">Proses</a>
                    </div>
                </div>
            </li>
            <?php if ($this->uri->segment(2) == "kategori") : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pb-0" href="<?= base_url('administrator/kategori'); ?>">
                    <i class="fas fa-fw fa-tags"></i>
                    <span>Kategori</span></a>
                </li>
                <?php if ($this->uri->segment(2) == "profile") : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                    <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link" href="<?= base_url('administrator/profile'); ?>">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Profile</span></a>
                    </li>
                <?php elseif ($users['role'] == "petugas") : ?>



                    <!-- PETUGAS -->
                    <div class="sidebar-heading">
                        Petugas
                    </div>
                    <?php if ($this->uri->segment(2) == "") : ?>
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?>
                        <a class="nav-link" href="<?= base_url('petugas'); ?>">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span></a>
                        </li>
                        <hr class="sidebar-divider">
                        <div class="sidebar-heading">
                            Penanganan
                        </div>
                        <?php if ($this->uri->segment(2) == "masyarakat") : ?>
                            <li class="nav-item active">
                            <?php else : ?>
                            <li class="nav-item">
                            <?php endif; ?>
                            <a class="nav-link pb-0" href="<?= base_url('petugas/masyarakat'); ?>">
                                <i class="fas fa-fw fa-users"></i>
                                <span>Masyarakat</span></a>
                            </li>
                            <!-- Nav Item - Pages Collapse Menu -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <i class="fas fa-fw fa-exclamation-circle"></i>
                                    <span>Pengaduan</span>
                                </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <h6 class="collapse-header">Daftar Pengaduan</h6>
                                        <a class="collapse-item" href="<?= base_url('petugas/pengaduanTag'); ?>">Semua Pengaduan</a>
                                        <a class="collapse-item" href="<?= base_url('petugas/selesaiTag'); ?>">Selesai</a>
                                        <a class="collapse-item" href="<?= base_url('petugas/prosesTag'); ?>">Proses</a>
                                    </div>
                                </div>
                            </li>
                            <?php if ($this->uri->segment(2) == "profile") : ?>
                                <li class="nav-item active">
                                <?php else : ?>
                                <li class="nav-item">
                                <?php endif; ?>
                                <a class="nav-link pt-0" href="<?= base_url('petugas/profile'); ?>">
                                    <i class="fas fa-fw fa-user"></i>
                                    <span>Profile</span></a>
                                </li>

                                <?php if ($this->uri->segment(2) == "accPengaduan") : ?>
                                    <li class="nav-item active">
                                    <?php else : ?>
                                    <li class="nav-item">
                                    <?php endif; ?>
                                    <a class="nav-link pt-0" href="<?= base_url('petugas/accPengaduan'); ?>">
                                        <i class="fas fa-fw fa-check-double"></i>
                                        <span>Setujui Pengaduan</span></a>
                                    </li>

                                <?php else : ?>



                                    <!-- Masyarakat -->
                                    <div class="sidebar-heading">
                                        Masyarakat
                                    </div>
                                    <?php if ($this->uri->segment(2) == "") : ?>
                                        <li class="nav-item active">
                                        <?php else : ?>
                                        <li class="nav-item">
                                        <?php endif; ?>
                                        <a class="nav-link" href="<?= base_url('masyarakat'); ?>">
                                            <i class="fas fa-fw fa-tachometer-alt"></i>
                                            <span>Dashboard</span></a>
                                        </li>
                                        <hr class="sidebar-divider">
                                        <div class="sidebar-heading">
                                            Pengaduan
                                        </div>
                                        <?php if ($this->uri->segment(2) == "pengaduan") : ?>
                                            <li class="nav-item active">
                                            <?php else : ?>
                                            <li class="nav-item">
                                            <?php endif; ?>
                                            <a class="nav-link pb-0" href="<?= site_url('masyarakat/pengaduan'); ?>">
                                                <i class="fas fa-fw fa-plus"></i>
                                                <span>Tambah Pengaduan</span></a>
                                            </li>
                                            <!-- Nav Item - Pages Collapse Menu -->
                                            <li class="nav-item">
                                                <a class="nav-link collapsed pb-0" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                    <i class="fas fa-fw fa-exclamation-circle"></i>
                                                    <span>Pengaduan-ku</span>
                                                </a>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                                    <div class="bg-white py-2 collapse-inner rounded">
                                                        <h6 class="collapse-header">Daftar Pengaduan</h6>
                                                        <a class="collapse-item" href="<?= base_url('masyarakat/selesai'); ?>">Disetujui</a>
                                                        <a class="collapse-item" href="<?= base_url('masyarakat/proses'); ?>">Proses</a>
                                                        <a class="collapse-item" href="<?= base_url('masyarakat/pending'); ?>">Pending</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php if ($this->uri->segment(2) == "profile") : ?>
                                                <li class="nav-item active">
                                                <?php else : ?>
                                                <li class="nav-item">
                                                <?php endif; ?>
                                                <a class="nav-link" href="<?= base_url('masyarakat/profile'); ?>">
                                                    <i class="fas fa-fw fa-user"></i>
                                                    <span>Profile</span></a>
                                                </li>
                                            <?php endif; ?>

                                            <!-- Divider -->
                                            <hr class="sidebar-divider d-none d-md-block">
                                            <li class="nav-item">
                                                <a class="nav-link pt-0" href="<?= base_url('auth/logout'); ?>" onclick="return confirm('Apakah anda yakin akan keluar dan menghapus semua sesi?');">
                                                    <i class="fas fa-fw fa-sign-out-alt"></i>
                                                    <span>Logout</span></a>
                                            </li>

                                            <!-- Sidebar Toggler (Sidebar) -->
                                            <div class="text-center d-none d-md-inline">
                                                <button class="rounded-circle border-0" id="sidebarToggle"></button>
                                            </div>

</ul>
<!-- End of Sidebar -->