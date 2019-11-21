<?php $this->load->view('front/header') ?>

<body>

    <?php $this->load->view('front/navbar') ?>


    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/template/') ?>images/bg_2.jpg'); background-attachment:fixed; height: 500px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 ftco-animate text-center">
                    <h1 class="mb-3 bread">Petunjuk Mengerjakan Soal :</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <div class="row">

                        <div class="col-md-10 bg-light p-5 ftco-animate">
                            <ul>
                                <h5>Tes ini terdiri atas beberapa pertanyaan yang berkaitan dengan aktivitas kamu dalam belajar, sehingga jawablah sesuai dengan kondisi kamu yang sebenarnya, dengan cara:</h5>
                                <li>
                                    <h5>Beri jawaban dengan menekan tombol pada sebelah kanan pilihan jawaban, dengan ketentuan sebagai berikut:</h5>
                                    <h5> <strong>Nilai 4</strong> pada pernyataan yang <strong>sangat sesuai</strong> dengan diri anda</h5>
                                    <h5> <strong>Nilai 3</strong> pada pernyataan yang <strong>sesuai</strong> dengan diri anda</h5>
                                    <h5> <strong>Nilai 2</strong> pada pernyataan yang <strong>agak / kurang sesuai</strong> dengan diri anda</h5>
                                    <h5> <strong>Nilai 1</strong> pada pernyataan yang <strong>tidak sesuai</strong> dengan diri anda</h5>
                                </li>
                                <li>
                                    <h5>Tekan tombol <strong class="badge badge-danger">Reset</strong>, jika ingin memperbaiki pilihan jawaban dan tombol <strong class="badge badge-success">Lanjutkan</strong> untuk melanjutkan pada soal berikutnya.</h5>
                                </li>
                                <br>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text" name="nama_lengkap" class="form-control" placeholder="input nama anda" require>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text" name="email" class="form-control" placeholder="input email anda" require>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 text-center mt-4">
                                            <a href="<?= base_url('front/soal/1') ?>" class="btn btn-primary">Lanjut Kerjakan Soal</a>
                                        </div>
                                    </div>

                                </form>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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