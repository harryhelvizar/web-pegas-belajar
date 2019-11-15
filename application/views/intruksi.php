<?php $this->load->view('front/header') ?>

<body>

    <?php $this->load->view('front/navbar') ?>


    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url('assets/template/') ?>images/bg_2.jpg'); background-attachment:fixed; height: 500px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 ftco-animate text-center">
                    <h1 class="mb-3 bread">Tata Cara Menjawab Soal :</h1>
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
                                <li>
                                    <h5>Beri nomor pada jawaban yang paling sesuai dengan diri anda</h5>
                                </li>
                                <li>
                                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt non ea totam modi ipsa aut debitis officiis corrupti quia quas!</h5>
                                </li>
                                <li>
                                    <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad nulla laudantium dolorem magnam dolores sint!</h5>
                                </li>
                                <li>
                                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, sed. Assumenda architecto neque accusamus ipsam commodi ducimus fugit aspernatur blanditiis tenetur, est veniam esse dicta?</h5>
                                </li>
                                <div class="text-center mt-5">

                                    <a href="<?= base_url('front/soal') ?>" class="btn btn-primary">Lanjut Kerjakan Soal</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php $this->load->view('front/footer') ?>