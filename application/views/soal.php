<?php $this->load->view('front/header') ?>

<body>

    <?php $this->load->view('front/navbar') ?>

    <?php foreach ($soal as $soal) : ?>
        <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/template/') ?>images/bg_2.jpg'); background-attachment:fixed; height: 500px;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                    <div class="col-md-10 ftco-animate text-center">
                        <h1 class="mb-3 bread"><?= $soal->soal ?></h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row">

                            <div class="col-md-12 bg-light  p-5 ftco-animate">
                                <form action="#">
                                    <h4 class="mb-4"><?= $soal->jawab_a ?></h4>
                                    <h4 class="mb-4"><?= $soal->jawab_b ?></h4>
                                    <h4 class="mb-4"><?= $soal->jawab_c ?></h4>
                                    <h4 class="mb-4"><?= $soal->jawab_d ?></h4>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endforeach; ?>

    <script>
        var i = 4;
        $('#btn1').click(function() {
            $(this).val(i);
            $(this).attr('disabled', 'disabled');
            i--;
        });

        $('#btn2').click(function() {
            $(this).val(i);
            $(this).attr('disabled', 'disabled');
            i--;
        })

        $('#btn3').click(function() {
            $(this).val(i);
            $(this).attr('disabled', 'disabled');
            i--;
        })

        $('#btn4').click(function() {
            $(this).val(i);
            $(this).attr('disabled', 'disabled');
            i--;
        })
    </script>

    <?php $this->load->view('front/footer') ?>