<?php $this->load->view('front/header') ?>

<body>
<section class="hasil_section">
    <?php $this->load->view('front/navbar') ?>


    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/template/') ?>images/bg_2.jpg'); background-attachment:fixed; ">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 ftco-animate text-center" style="margin-top: 10px !important;">

                    <div class="row mb-3" style="color: black;">
                        <div class="col-md-6">
                            <div class="card bg-primary mb-3">
                                <h3>Divergen</h3>
                                <h3>Feeling / Reflector</h3>
                                <h1>50%</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-warning">
                                <h3>Divergen</h3>
                                <h3>Feeling / Reflector</h3>
                                <h1>10%</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-warning mb-3">
                                <h3>Divergen</h3>
                                <h3>Feeling / Reflector</h3>
                                <h1>20%</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-warning">
                                <h3>Divergen</h3>
                                <h3>Feeling / Reflector</h3>
                                <h1>20%</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-12 bg-light p-5 ftco-animate">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card bg-primary mb-2">
                                        <div class="ml-3">
                                            <h3 class="text-white">Nama : <?= $login->nama ?></h3>
                                            <h4 class="text-white">NIS : <?= $login->nis ?></h4>
                                            <h4 class="text-white">Asal Sekolah : <?= $login->asal_sekolah ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text-center mt-2">
                                    <div class="card bg-primary text-white">
                                        <h3>Kekuatan</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo aliquam nesciunt</p>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center mt-2">
                                    <div class="card bg-primary text-white">
                                        <h3>Kelemahan</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo aliquam nesciunt</p>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4 text-center mt-2">
                                    <div class="card bg-primary text-white">
                                        <h3>Tipe Kepribadian</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo aliquam nesciunt</p>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center mt-2">
                                    <div class="card bg-primary text-white">
                                        <h3>Tugas Yang Sesuai</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo aliquam nesciunt</p>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center mt-2">
                                    <div class="card bg-primary text-white">
                                        <h3>Kemampuan Adaptif</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo aliquam nesciunt</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6 text-center mt-2">
                                    <div class="card bg-primary text-white">
                                        <h3>Cara Belajar</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo aliquam nesciunt</p>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center mt-2">
                                    <div class="card bg-primary text-white">
                                        <h3>Metode Mengajar Guru Yang sesuai</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo aliquam nesciunt</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>

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