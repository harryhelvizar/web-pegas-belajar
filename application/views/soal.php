<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



<script type='text/javascript' src='<?= base_url('assets/') ?>js/jquery.js'></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>


<script src="<?= base_url('assets/') ?>plugins/parallax-js-master/parallax.min.js"></script>

<link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">



<?php $this->load->view('front/header') ?>

<body>
    <div class="hero-content">

        <?php $this->load->view('front/navbar') ?>

    </div><!-- .hero-content -->

    <div class="milestones">
        <!-- Background image artis https://unsplash.com/@thepootphotographer -->
        <div class="parallax_background" data-parallax="scroll" data-image-src="<?= base_url('assets/') ?>images/slide1.jpg" data-speed="0.8">
        </div>
    </div>

    <?php foreach ($soal as $soal) : ?>

        <div class="kerja-soal">
            <div class="container">
                <br>
                <div class="soal">
                    <h2 style="color:white;"><?= $soal->soal ?></h2>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-1">
                        <input class="btn btn-primary" type="button" id="btn1" value="_">
                        </button>
                    </div>
                    <div class="col-md-10 soal">
                        <p style="color:white;"><?= $soal->jawab_a ?></p>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-1">
                        <input class="btn btn-primary" type="button" id="btn2" value="_">
                        </button>
                    </div>
                    <div class="col-md-10 soal">
                        <p style="color:white;"><?= $soal->jawab_b ?></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-1">
                        <input class="btn btn-primary" type="button" id="btn3" value="_">
                        </button>
                    </div>
                    <div class="col-md-10 soal">
                        <p style="color:white;"><?= $soal->jawab_c ?></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-1">
                        <input class="btn btn-primary" type="button" id="btn4" value="_">
                        </button>
                    </div>
                    <div class="col-md-10 soal">
                        <p style="color:white;"><?= $soal->jawab_d ?></p>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary mb-5">Selanjutnya</button>
                <button type="button" class="btn btn-danger mb-5">Reset</button>

                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <p style="color:white;">Soal ke : <?= $soal->id ?> - <?= $total_soal ?></p>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <br>
        </div>

    <?php endforeach; ?>

    </head>

    <body>

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


<script type='text/javascript' src='<?= base_url('assets/') ?>js/custom.js'></script>


