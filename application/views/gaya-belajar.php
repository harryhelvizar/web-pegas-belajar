<?php $this->load->view('front/header') ?>

<body>

    <?php $this->load->view('front/navbar') ?>

    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/template/') ?>images/bg_2.jpg'); background-attachment:fixed; height: 500px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <h1 class="mb-3 bread">Tentang Kami</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">

                <div class="col-md-10 pl-md-5 ftco-animate">
                    <h2 class="mb-4">Selamat datang di situs PegasBelajar.</h2>
                    <p>Pegas Belajar merupakan media penelusuran gaya belajar siswa berbasis website, yang dikembangkan secara khusus untuk membantu siswa mengenali dan memahami preferensi gaya belajarnya. Pegas Belajar ini dibuat dengan memanfaatkan perkembangan IT, yang secara khusus diperuntukkan bagi siswa di sekolah menengah atas (SMA).</p>
                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view('front/footer') ?>