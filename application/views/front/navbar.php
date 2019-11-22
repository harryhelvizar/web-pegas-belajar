<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('front') ?>"><img src="<?= base_url('assets/template/') ?>images/pegas-02-01.png" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Unduh</a></li>
                <li class="nav-item"><a href="<?= base_url('front/tentang') ?>" class="nav-link">Tentang</a></li>
                <li class="nav-item"><a href="<?= base_url('front/kontak') ?>" class="nav-link">Kontak</a></li>

                <?php if ($login) { ?>
                    <li class="nav-item"><a href="#" class="nav-link"><?= $login->nama ?></a></li>
                    <li class="nav-item "><a href="<?= base_url('siswa/auth/logout') ?>" class="nav-link"><span>Keluar</span></a></li>
                <?php } else { ?>
                    <li class="nav-item"><a href="<?= base_url('siswa/auth') ?>" class="nav-link">Login</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->