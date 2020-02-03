<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('front') ?>"><img src="<?= base_url('assets/template/') ?>images/pegas-02-01.png" width="180"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link" onMouseOver="this.style.color='#E36C0A'" onMouseOut="this.style.color='#55688b'">Beranda</a></li>
                <li class="nav-item"><a target="_blank" href="<?= base_url('buku-panduan-pegas-belajar.pdf') ?>" class="nav-link" onMouseOver="this.style.color='#E36C0A'" onMouseOut="this.style.color='#55688b'">Panduan</a></li>
                <li class="nav-item"><a href="<?= base_url('front/tentang') ?>" class="nav-link" onMouseOver="this.style.color='#E36C0A'" onMouseOut="this.style.color='#55688b'">Tentang</a></li>
                <li class="nav-item"><a href="<?= base_url('front/kontak') ?>" class="nav-link" onMouseOver="this.style.color='#E36C0A'" onMouseOut="this.style.color='#55688b'">Kontak</a></li>

                <?php if ($login) { ?>
                    <div class="dropdown">

                        <!-- <a href="" role="button" data-toggle="dropdown">
                            <img src="<?= base_url('assets/admin/') ?>dist/img/user4-128x128.jpg" alt="" style="width:40px; margin-top: 5px; border-radius: 50%;">
                        </a> -->


                        <!-- <div class="dropdown-menu">
                            <li class="nav-item"><a href="#" class="nav-link" onMouseOver="this.style.color='#E36C0A'" onMouseOut="this.style.color='#55688b'">Profil</a></li>
                            <li class="nav-item"><a href="<?= base_url('siswa/auth/logout') ?>" class="nav-link" style="color: #E36C0A">Keluar</a></li>

                        </div> -->
                    </div>
                <?php } else { ?>
                    <li class="nav-item"><a href="<?= base_url('siswa/auth') ?>" class="nav-link" style="color: #E36C0A">Masuk</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->