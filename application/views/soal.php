<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type='text/javascript' src='<?= base_url('assets/') ?>js/jquery.js'></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>


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

                            <div class="col-md-12 bg-light p-5 ftco-animate">
                                <form action="<?= base_url('front/soal') ?>" method="post" id="btn">
                                    <?php $jawab = [] ?>
                                    <div class="col" style="text-align: right;">
                                        <p class="badge badge-warning" style="padding:10px;">Soal ke: <?= $soal->id_soal ?> - <?= $total_soal; ?></p>
                                    </div>

                                    <div class="row mt">
                                        <div class="col-md-1 jawab-soal">
                                            <input class="btn btn-primary" type="button" id="btn1" <?php $jawab[0] = ['name="btn1"'] ?> value=" 0 ">
                                        </div>
                                        <div class="col-md-10 soal">
                                            <h5><?= $soal->jawab_a ?></h5>
                                        </div>
                                    </div>
                                    <div class="row mt">
                                        <div class="col-md-1">
                                            <input class="btn btn-primary" type="button" id="btn2" <?php $jawab[1] = ['name="btn2"'] ?> value=" 0 ">
                                        </div>
                                        <div class="col-md-10 soal">
                                            <h5><?= $soal->jawab_b ?></h5>
                                        </div>
                                    </div>
                                    <div class="row mt">
                                        <div class="col-md-1">
                                            <input class="btn btn-primary" type="button" id="btn3" <?php $jawab[2] = ['name="btn3"'] ?> value=" 0 ">
                                        </div>
                                        <div class="col-md-10 soal">
                                            <h5><?= $soal->jawab_c ?></h5>
                                        </div>
                                    </div>
                                    <div class="row mt">
                                        <div class="col-md-1">
                                            <input class="btn btn-primary" type="button" id="btn4" <?php $jawab[3] = ['name="btn4"'] ?> value=" 0 ">
                                        </div>
                                        <div class="col-md-10 soal">
                                            <h5><?= $soal->jawab_d ?></h5>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-1">

                                        </div>
                                        <div class="col-md-2">
                                            <a href="<?php base_url('front/soal/') ?>" class="btn btn-success">Lanjutkan</a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="#" class="btn btn-danger">Reset</a>
                                        </div>
                                        <div class="col-md-7"></div>
                                    </div>

                                        <!-- <div class="pagination">
                                            <?= $this->pagination->create_links(); ?>
                                        </div> -->
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
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="<?= base_url('assets/template/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.stellar.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/aos.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.timepicker.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="<?= base_url('assets/template/') ?>js/google-map.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/main.js"></script>

</body>

</html>