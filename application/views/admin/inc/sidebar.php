<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url('assets/admin/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PegasBelajar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/admin/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('email') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="<?= base_url('admin/dashboard/') ?>" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/soal/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Soal</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/siswa/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Siswa</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/gayabelajar/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Gaya Belajar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/testimoni') ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Testimoni</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/user/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Admin</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/konfigurasi/slider') ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Slider</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Daftar Kelas
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Collapsed Sidebar</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>