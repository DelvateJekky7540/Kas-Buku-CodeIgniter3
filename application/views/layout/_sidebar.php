<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="<?= base_url('assets/corona/template/') ?>assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets/corona/template/') ?>assets/images/logo-mini.svg" alt="logo" /></a>
    </div>

    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="<?= base_url('assets/corona/template/') ?>assets/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal"><?= $this->session->userdata('nama') ?></h5>
                        <span><?= $this->session->userdata('role') ?></span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url('auth/logout') ?>" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="bi bi-box-arrow-left text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Log Out</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>

        <!-- SIDEBAR MENU -->
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('home') ?>">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('pemasukan') ?>">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Pemasukan</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('pengeluaran') ?>">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Pengeluaran</span>
            </a>
        </li>

        <?php if($this->session->userdata('role')=='Admin'){ ?>
        <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url('user') ?>">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">User</span>
            </a>
        </li>
        <?php } ?>
    </ul>
</nav>