<?php $this->load->view('front/header') ?>

<body>

    <?php $this->load->view('front/navbar') ?>
<<<<<<< HEAD
    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/template/') ?>images/bg_2.jpg'); background-attachment:fixed; height: 500px;">
=======

    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/template/') ?>images/bg_2.jpg'); background-attachment:fixed; max-height: 300px;">
>>>>>>> 5c0f28a978112ca21e5d4a31a87fed9000ee2270
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <?php foreach($gaya as $gaya) : ?>

                        <h1>
                            <?= $gaya->nama_gaya_belajar?>
                        </h1>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                
                <div class="col-md-10 pl-md-5 ftco-animate karakteristik">
                <?php
                        echo ("<h2>". $gaya->title . "</h2>");
                        echo ($gaya->karakteristik);
                    ?>
                </div>
            </div>
        </div>
    </section>
    

    <?php $this->load->view('front/footer') ?>