<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type='text/javascript' src='<?= base_url('assets/') ?>js/jquery.js'></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/template/') ?>js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        //sembunyikan semua div soal
        for (var j=2; j<=22; j++)
            $('#soal_' + j).hide();
        
        $('#lanjut_22').val("Selesai");
    });
    

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
                            <div id="soal_<?= $soal->id_soal?>">
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
                                        <img src="<?= base_url()?>assets/img/think.svg" alt="">
                                    </div>
                                    <div class="container" style="text-align: center;">
                                        <div class="card bg-warning pl-1 pt-2 pb-2">
                                            <h3><?= $soal->soal ?></h3>
                                        </div>
                                    </div>
                                    <form action="" method="post" id="form" name="form1">
                                        <div class="row mt-4">
                                            <div class="col-1 jawab-soal ml-3">
                                                <input class="btn btn-primary" name="jawaban[]" type="button" id="btn1_<?= $soal->id_soal?>" <?php $jawab[0] = ['name="btn1"'] ?> value=" 0 ">
                                            </div>
                                            <div class="col-10">
                                                <h5><?= $soal->jawab_a ?></h5>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-1 jawab-soal ml-3">
                                                <input class="btn btn-primary" name="jawaban[]" type="button" id="btn2_<?= $soal->id_soal?>" <?php $jawab[1] = ['name="btn2"'] ?> value=" 0 ">
                                            </div>
                                            <div class="col-10">
                                                <h5><?= $soal->jawab_b ?></h5>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-1 jawab-soal ml-3">
                                                <input class="btn btn-primary" name="jawaban[]" type="button" id="btn3_<?= $soal->id_soal?>" <?php $jawab[2] = ['name="btn3"'] ?> value=" 0 ">
                                            </div>
                                            <div class="col-10">
                                                <h5><?= $soal->jawab_c ?></h5>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-1 jawab-soal ml-3">
                                                <input class="btn btn-primary" name="jawaban[]" type="button" id="btn4_<?= $soal->id_soal?>" <?php $jawab[3] = ['name="btn4"'] ?> value=" 0 ">
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
                                        var question = {
                                            1 : {
                                                "A" : "O",
                                                "B" : "D",
                                                "C" : "F",
                                                "D" : "T",
                                            },
                                            2 : {
                                                "A" : "O",
                                                "B" : "F",
                                                "C" : "T",
                                                "D" : "D",
                                            },
                                            3 : {
                                                "A" : "O",
                                                "B" : "D",
                                                "C" : "F",
                                                "D " : "T",
                                            },
                                            4 : {
                                                "A " : "F",
                                                "B " : "T",
                                                "C " : "D",
                                                "D " : "O",
                                            },

                                            5 : {
                                                "A " : "F",
                                                "B " : "O",
                                                "C " : "D",
                                                "D " : "T",
                                            },

                                            6 : {
                                                "A " : "D",
                                                "B " : "T",
                                                "C " : "O",
                                                "D " : "F",
                                            },

                                            7 : {
                                                "A " : "T",
                                                "B " : "F",
                                                "C " : "D",
                                                "D " : "O",
                                            },

                                            
                                            8 : {
                                                "A " : "O",
                                                "B " : "D",
                                                "C " : "T",
                                                "D " : "F",
                                            },

                                            
                                            9 : {
                                                "A " : "T",
                                                "B " : "F",
                                                "C " : "D",
                                                "D " : "O",
                                            },

                                            10 : {
                                                "A " : "D",
                                                "B " : "T",
                                                "C " : "O",
                                                "D " : "F",
                                            },

                                            11 : {
                                                "A " : "T",
                                                "B " : "D",
                                                "C " : "O",
                                                "D " : "F",
                                            },
                                            
                                            12 : {
                                                "A " : "T",
                                                "B " : "F",
                                                "C " : "O",
                                                "D " : "D",
                                            },

                                            13 : {
                                                "A " : "F",
                                                "B " : "O",
                                                "C " : "T",
                                                "D " : "D",
                                            },

                                            14 : {
                                                "A " : "F",
                                                "B " : "O",
                                                "C " : "T",
                                                "D " : "D",
                                            },

                                            15 : {
                                                "A " : "F",
                                                "B " : "O",
                                                "C " : "T",
                                                "D " : "D",
                                            },

                                            16 : {
                                                "A " : "F",
                                                "B " : "O",
                                                "C " : "T",
                                                "D " : "D",
                                            },

                                            17 : {
                                                "A " : "F",
                                                "B " : "O",
                                                "C " : "T",
                                                "D " : "D",
                                            },

                                            19 : {
                                                "A " : "F",
                                                "B " : "O",
                                                "C " : "T",
                                                "D " : "D",
                                            },

                                            20 : {
                                                "A " : "F",
                                                "B " : "O",
                                                "C " : "T",
                                                "D " : "D",
                                            },

                                            21 : {
                                                "A " : "F",
                                                "B " : "O",
                                                "C " : "T",
                                                "D " : "D",
                                            },

                                            22 : {
                                                "A " : "F",
                                                "B " : "O",
                                                "C " : "T",
                                                "D " : "D",
                                            }
                                            
                                            };

                                            //alert(question[1]["A"]);
                                        var kunciF=0, kunciO=0, kunciT=0, kunciD=0;
                                        var i = 4;
                                        
                                        function cekQuestion(a,b){
                                            
                                            if (question[a][b] == 'F')
                                                kunciF += i;
                                            if (question[a][b] == 'O')
                                                kunciO += i;
                                            if (question[a][b] == 'T')
                                                kunciT += i;
                                            if (question[a][b] == 'D')
                                                kunciD += i;
                                        }

                                        $('#btn1_<?= $soal->id_soal?>').click(function() {
                                            $(this).val(i);
                                            $(this).attr('disabled', 'disabled');
                                            cekQuestion(<?= $soal->id_soal?>, "A");
                                            i--;
                                            if (i==0)
                                                i=4;
                                        });
                                        $('#btn2_<?= $soal->id_soal?>').click(function() {
                                            $(this).val(i);
                                            $(this).attr('disabled', 'disabled');
                                            cekQuestion(<?= $soal->id_soal?>, "B");
                                            i--;
                                            if (i==0) 
                                                i=4;
                                        });
                                        $('#btn3_<?= $soal->id_soal?>').click(function() {
                                            $(this).val(i);
                                            $(this).attr('disabled', 'disabled');
                                            cekQuestion(<?= $soal->id_soal?>, "C");
                                            i--;
                                            if (i==0)
                                                i=4;
                                        });
                                        $('#btn4_<?= $soal->id_soal?>').click(function() {
                                            $(this).val(i);
                                            $(this).attr('disabled', 'disabled');
                                            cekQuestion(<?= $soal->id_soal?>, "D");
                                            i--;
                                            if (i==0) 
                                                i=4;

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
    
    <?php for($a=1; $a<=21; $a++){?> 
    
        $('#lanjut_<?= $a ?>').click(function(){
            if (i==4){
                $('#soal_<?= $a ?>').hide();
                $('#soal_<?= $a+1 ?>').show();
            }
        });
                                
    <?php 
    } ?>
    </script>

</body>

</html>