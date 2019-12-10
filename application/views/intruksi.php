<?php $this->load->view('front/header') ?>

<body>

    <?php $this->load->view('front/navbar') ?>


    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/template/') ?>images/bg_2.jpg'); background-attachment:fixed; max-height: 300px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 ftco-animate text-center">
                    <h1 class="mb-3 bread">Petunjuk Mengerjakan Tes</h1>
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
                            <ul style="list-style: none;">
                                <h5>Tes ini terdiri atas beberapa pertanyaan yang berkaitan dengan aktivitas kamu dalam belajar, sehingga jawablah sesuai dengan kondisi kamu yang sebenarnya, dengan cara:</h5>
                                <li>
                                    <h5>Beri jawaban dengan menekan tombol <span class="btn btn-primary ">_</span> pada sebelah kanan pilihan jawaban, dengan ketentuan sebagai berikut:</h5>
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
                                        <div class="col-md-3 mt-4" style="margin: auto">
                                            <a href="<?= base_url('front/soal') ?>" class="btn btn-primary" id="btnlanjut">Lanjut Kerjakan Tes</a>
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

    <?php $this->load->view('front/script') ?>
    <script>
        // function lanjut() {
        //     var nama = document.getElementById("nama").value;
        //     var email = document.getElementById("email").value;
        //     if (nama != "" || email != "") {
        //         windows.location.href = "<?= base_url() ?>";
        //         return true;
        //     } else {
        //         alert('Anda harus mengisi data dengan lengkap !');
        //     }
        // }
    </script>
</body>

</html>