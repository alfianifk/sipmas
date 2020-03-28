 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
             <?php if ($users['role'] == "admin") : ?>
                 <div class="nav-item">
                     <div class="text-dark"><?= $user['nama_admin'] ?></div>
                 </div>
             <?php elseif ($users['role'] == "petugas") : ?>
                 <div class="nav-item">
                     <div class="text-dark"><?= $user['status_petugas']; ?></div>
                 </div>
             <?php else : ?>
                 <div class="nav-item">
                     <div class="text-dark">Masyarakat</div>
                 </div>
             <?php endif; ?>
             <div class="topbar-divider d-none d-sm-block"></div>
             <!-- Sidebar Toggle (Topbar) -->
             <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 text-dark">
                 <i class="fa fa-bars"></i>
             </button>

             <!-- Topbar Navbar -->
             <ul class="navbar-nav ml-auto">
                 <div class="topbar-divider d-none d-sm-block"></div>
                 <!-- Nav Item - User Information -->
                 <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $users['nama']; ?></span>
                         <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                         <a class="dropdown-item" href="#">
                             <i class="fas fa-circle fa-sm fa-fw mr-2 text-dark"></i>
                             <?php echo ucfirst($users['role']); ?>
                         </a>
                         <div class="dropdown-divider"></div>
                         <?php if ($users['role'] == "admin") :  ?>
                             <a class="dropdown-item" href="<?= base_url('administrator/profile'); ?>">
                             <?php elseif ($users['role'] == "petugas") : ?>
                                 <a class="dropdown-item" href="<?= base_url('petugas/profile'); ?>">
                                 <?php else : ?>
                                     <a class="dropdown-item" href="<?= base_url('masyarakat/profile'); ?>">
                                     <?php endif; ?>
                                     <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                     Profile
                                     </a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                         <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                         Logout
                                     </a>
                     </div>
                 </li>

             </ul>

         </nav>
         <!-- End of Topbar -->