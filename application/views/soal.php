<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type='text/javascript' src='<?= base_url('assets/') ?>js/jquery.js'></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/template/') ?>js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        //sembunyikan semua div soal
        for (var j = 2; j <= 22; j++)
            $('#soal_' + j).hide();

        $('.hasil_section').hide();
        $('#lanjut_22').val("Selesai");
    });

    var question = {
        1: {
            "A": "O",
            "B": "D",
            "C": "F",
            "D": "T",
        },
        2: {
            "A": "O",
            "B": "F",
            "C": "T",
            "D": "D",
        },
        3: {
            "A": "O",
            "B": "D",
            "C": "F",
            "D": "T",
        },
        4: {
            "A": "F",
            "B": "T",
            "C": "D",
            "D": "O",
        },

        5: {
            "A": "F",
            "B": "O",
            "C": "D",
            "D": "T",
        },

        6: {
            "A": "D",
            "B": "T",
            "C": "O",
            "D": "F",
        },

        7: {
            "A": "T",
            "B": "F",
            "C": "D",
            "D": "O",
        },


        8: {
            "A": "O",
            "B": "D",
            "C": "T",
            "D": "F",
        },


        9: {
            "A": "T",
            "B": "F",
            "C": "D",
            "D": "O",
        },

        10: {
            "A": "D",
            "B": "T",
            "C": "O",
            "D": "F",
        },

        11: {
            "A": "T",
            "B": "D",
            "C": "O",
            "D": "F",
        },

        12: {
            "A": "T",
            "B": "F",
            "C": "O",
            "D": "D",
        },

        13: {
            "A": "F",
            "B": "O",
            "C": "T",
            "D": "D",
        },

        14: {
            "A": "F",
            "B": "O",
            "C": "T",
            "D": "D",
        },

        15: {
            "A": "F",
            "B": "O",
            "C": "T",
            "D": "D",
        },

        16: {
            "A": "F",
            "B": "O",
            "C": "T",
            "D": "D",
        },

        17: {
            "A": "F",
            "B": "O",
            "C": "T",
            "D": "D",
        },

        18: {
            "A": "F",
            "B": "O",
            "C": "T",
            "D": "D",
        },

        19: {
            "A": "F",
            "B": "O",
            "C": "T",
            "D": "D",
        },

        20: {
            "A": "F",
            "B": "O",
            "C": "T",
            "D": "D",
        },

        21: {
            "A": "F",
            "B": "O",
            "C": "T",
            "D": "D",
        },

        22: {
            "A": "F",
            "B": "O",
            "C": "T",
            "D": "D",
        }

    };

    //alert(question[1]["A"]);
    var kunciF = 0,
        kunciO = 0,
        kunciT = 0,
        kunciD = 0;
</script>


<?php
$this->load->view('front/header');
?>

<body>

    <section class="soal_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">

                    <div class="soal">

                        <?php foreach ($soal as $soal) : ?>
                            <div id="soal_<?= $soal->id_soal ?>">
                                <div class="col-md-12 bg-light p-5 ftco-animate">
                                    <div class="row pb-5">
                                        <div class="col-12" style="text-align: right;">
                                            <a href="<?= base_url() ?>" class="btn btn-danger">Keluar</a>
                                        </div>
                                    </div>

                                    <style>
                                        .gambar-soal img {
                                            width: 400px;
                                            height: 250px;
                                        }
                                    </style>

                                    <div class="gambar-soal img-fluid">
                                        <!-- <img src="<?= base_url() ?>assets/img/think.svg" alt=""> -->
                                    </div>

                                    <div class="container" style="text-align: center;">
                                        <div class="card bg-warning pl-1 pt-2 pb-2">
                                            <h3><?= $soal->soal ?></h3>
                                        </div>
                                    </div>

                                    <form action="" method="post" id="form_<?= $soal->id_soal ?>" name="form_<?= $soal->id_soal ?>">
                                        <div class="row mt-4">
                                            <div class="col-1 jawab-soal ml-3">
                                                <input class="btn btn-primary" name="jawaban[]" type="button" id="btn1_<?= $soal->id_soal ?>" <?php $jawab[0] = ['name="btn1"'] ?> value="_ ">
                                            </div>
                                            <div class="col-10">
                                                <h5><?= $soal->jawab_a ?></h5>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-1 jawab-soal ml-3">
                                                <input class="btn btn-primary" name="jawaban[]" type="button" id="btn2_<?= $soal->id_soal ?>" <?php $jawab[1] = ['name="btn2"'] ?> value=" _ ">
                                            </div>
                                            <div class="col-10">
                                                <h5><?= $soal->jawab_b ?></h5>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-1 jawab-soal ml-3">
                                                <input class="btn btn-primary" name="jawaban[]" type="button" id="btn3_<?= $soal->id_soal ?>" <?php $jawab[2] = ['name="btn3"'] ?> value=" _ ">
                                            </div>
                                            <div class="col-10">
                                                <h5><?= $soal->jawab_c ?></h5>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-1 jawab-soal ml-3">
                                                <input class="btn btn-primary" name="jawaban[]" type="button" id="btn4_<?= $soal->id_soal ?>" <?php $jawab[3] = ['name="btn4"'] ?> value=" _ ">
                                            </div>
                                            <div class="col-10">
                                                <h5><?= $soal->jawab_d ?></h5>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-1">


                                            </div>
                                            <div class="col-md-2">
                                                <input type="button" class="btn btn-success" id="lanjut_<?= $soal->id_soal ?>" value='Lanjutkan'>
                                            </div>
                                            <div class="col-md-2">
                                                <button type=reset id="reset" onclick="window.location.reload(true);" class="btn btn-danger">Reset</button>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="col" style="text-align: right;">
                                                    <p class="badge badge-warning" style="padding:10px;">Soal ke: <?= $soal->id_soal ?> - <?= $total_soal; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <script>
                                        var i = 4;

                                        function cekQuestion(a, b) {

                                            if (question[a][b] == "F")
                                                kunciF += i;
                                            if (question[a][b] == "O")
                                                kunciO += i;
                                            if (question[a][b] == "T")
                                                kunciT += i;
                                            if (question[a][b] == "D")
                                                kunciD += i;
                                        }

                                        $('#btn1_<?= $soal->id_soal ?>').click(function() {
                                            $(this).val(i);
                                            $(this).attr('disabled', 'disabled');
                                            cekQuestion(<?= $soal->id_soal ?>, "A");

                                            i--;
                                            if (i == 0)
                                                i = 4;
                                        });

                                        $('#btn2_<?= $soal->id_soal ?>').click(function() {
                                            $(this).val(i);
                                            $(this).attr('disabled', 'disabled');
                                            cekQuestion(<?= $soal->id_soal ?>, "B");
                                            i--;
                                            if (i == 0)
                                                i = 4;
                                        });

                                        $('#btn3_<?= $soal->id_soal ?>').click(function() {
                                            $(this).val(i);
                                            $(this).attr('disabled', 'disabled');
                                            cekQuestion(<?= $soal->id_soal ?>, "C");
                                            i--;
                                            if (i == 0)
                                                i = 4;
                                        });

                                        $('#btn4_<?= $soal->id_soal ?>').click(function() {
                                            $(this).val(i);
                                            $(this).attr('disabled', 'disabled');
                                            cekQuestion(<?= $soal->id_soal ?>, "D");
                                            i--;
                                            if (i == 0)
                                                i = 4;
                                        });
                                    </script>

                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="hasil_section">
        <?php $this->load->view('front/navbar') ?>


        <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/template/') ?>images/bg_2.jpg'); background-attachment:fixed; ">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                    <div class="col-md-10 ftco-animate text-center" style="margin-top: 10px !important;">

                        <div class="row mb-3" style="color: black;">
                            <div class="col-md-6">
                                <div class="card bg-warning mb-3" id="feeling">
                                    <h3>Divergen</h3>
                                    <!-- <h3>Feeling / Reflector</h3> -->
                                    <h1 id="nilaiFeeling">0%</h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-warning" id="observer">
                                    <h3>Asimilasi</h3>
                                    <!-- <h3>Feeling / Reflector</h3> -->
                                    <h1 id="nilaiObserver">0%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-warning mb-3" id="thinker">
                                    <h3>Kovergen</h3>
                                    <!-- <h3>Feeling / Reflector</h3> -->
                                    <h1 id="nilaiThinker">0%</h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-warning" id="doer">
                                    <h3>Asimilasi</h3>
                                    <!-- <h3>Feeling / Reflector</h3> -->
                                    <h1 id="nilaiDoer">0%</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="<?= base_url() . "front/savejwb" ?>" method="post">
                                    <input type="hidden" id="kunciF" name="kunciF">
                                    <input type="hidden" id="kunciO" name="kunciO">
                                    <input type="hidden" id="kunciD" name="kunciD">
                                    <input type="hidden" id="kunciT" name="kunciT">
                                    <input type="hidden" id="nilaimax" name="nilaimax">
                                    <input type="hidden" id="id_siswa" name="id_siswa" value=<?= $login->id_siswa ?>>
                                    <button type="submit" name="" id="" class="btn btn-primary btn-large">Simpan</button>
                                    <a name="" id="" class="btn btn-warning" href="<?= base_url() . "front/soal" ?>" role="button">Ulangi</a>
                                </form>
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
                        <div class="">
                            <div class="card bg-light mb-3">
                                <div class="card-body text-center">
                                    <h5>Nama Lengkap : <?= $login->nama ?> </h5>
                                    <h5>NIS : <?= $login->nis ?> </h5>
                                    <h5>Asal Sekolah : <?= $login->asal_sekolah ?> </h5>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class=" mt-3">
                                    <div class="card bg-light mb-3 border-warning">
                                        <div class="card-header bg-warning">
                                            <h5>Kekuatan</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mt-3">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5>Kelemahan</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class=" mt-3">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5>Tipe Kepribadian</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mt-3">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5>Tugas Yang Sesuai</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class=" mt-3">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5>Kemampuan Adaptif</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mt-3">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5>Cara Belajar</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 ">
                                <div class=" mt-3">
                                    <div class="card bg-light mb-3">
                                        <div class="card-header">
                                            <h5>Metode Mengajar Guru Yang Sesuai</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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

    <script>
        <?php for ($a = 1; $a <= 21; $a++) { ?>

            $('#lanjut_<?= $a ?>').click(function() {
                if (i == 4) {
                    $('#soal_<?= $a ?>').hide();
                    $('#soal_<?= $a + 1 ?>').show();
                }
            });

        <?php
        } ?>
        $('#lanjut_22').click(function() {
            if (i == 4) {
                $('.soal_section').hide();
                $('.hasil_section').show();
                $('#nilaiFeeling').text(((kunciF / 88) * 100).toFixed(0) + " %");
                $('#nilaiObserver').text(((kunciO / 88) * 100).toFixed(0) + " %");
                $('#nilaiThinker').text(((kunciT / 88) * 100).toFixed(0) + " %");
                $('#nilaiDoer').text(((kunciD / 88) * 100).toFixed(0) + " %");
                $('#kunciF').val(kunciF);
                $('#kunciO').val(kunciO);
                $('#kunciT').val(kunciT);
                $('#kunciD').val(kunciD);
                var id_siswa = $('#id_siswa').val();
            }

            var max = kunciF;
            var nilaimax = "F";

            if (max < kunciO) {
                max = kunciO;
                nilaimax = "O";
            }
            if (max < kunciT) {
                max = kunciT;
                nilaimax = "T";
            }
            if (max < kunciD) {
                max = kunciD;
                nilaimax = "D";
            }

            if (max == kunciF) {
                $('#feeling').addClass("bg-primary");
                $('#feeling').removeClass("bg-warning");
            }

            if (max == kunciO) {
                $('#observer').addClass("bg-primary");
                $('#observer').removeClass("bg-warning");
            }

            if (max == kunciT) {
                $('#thinker').addClass("bg-primary");
                $('#thinker').removeClass("bg-warning");
            }

            if (max == kunciD) {
                $('#doer').addClass("bg-primary");
                $('#doer').removeClass("bg-warning");
            }

            $('#nilaimax').val(nilaimax);
        });
    </script>

</body>

</html>