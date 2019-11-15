<?php $this->load->view('front/header') ?>

<body>

    <?php $this->load->view('front/navbar') ?>

    <?php $this->load->view('front/slider') ?>

    <section class="ftco-section">
        <div class="container">
            <h3 class="text-center">Informasi Gaya Belajar</h3>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-4 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-exam"></span>
                        </div>
                        <div class="media-body px-3">
                            <h3 class="heading">Divergen</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                            <a href="#" class="btn btn-primary">read more >></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-4 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-exam"></span>
                        </div>
                        <div class="media-body px-3">
                            <h3 class="heading">Asimilasi</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                            <a href="#" class="btn btn-primary">read more >></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-4 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-blackboard"></span></div>
                        <div class="media-body px-3">
                            <h3 class="heading">Kovergen</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                            <a href="#" class="btn btn-primary">read more >></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-4 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-books"></span>
                        </div>
                        <div class="media-body px-3">
                            <h3 class="heading">Akomodasi</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                            <a href="#" class="btn btn-primary">read more >></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section-3 ftco-counter img" id="section-counter" style="background-image: url(<?= base_url('assets/template/') ?>images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-9 about-video text-center">
                    <div class="container">
                        <div class="row justify-content-center ">
                            <div class="col-md-10">
                                <div class="row">

                                    <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                        <div class="block-18 text-center">
                                            <div class="text ">
                                                <strong class="number text-white" data-number="<?= $siswa ?>">0</strong>
                                                <span class="text-white">Siswa</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                        <div class="block-18 text-center">
                                            <div class="text">
                                                <strong class="number text-white" data-number="<?= $admin ?>">0</strong>
                                                <span class="text-white">Kelas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                        <div class="block-18 text-center">
                                            <div class="text">
                                                <strong class="number text-white" data-number="<?= $siswa + $admin ?>">0</strong>
                                                <span class="text-white">Total</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Testimonial</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-5" style="background-image: url(<?= base_url('assets/template/') ?>images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                                        the Semantics, a large language ocean.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">CSE Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-5" style="background-image: url(<?= base_url('assets/template/') ?>images/person_2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                                        the Semantics, a large language ocean.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Math Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-5" style="background-image: url(<?= base_url('assets/template/') ?>images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                                        the Semantics, a large language ocean.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Science Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-5" style="background-image: url(<?= base_url('assets/template/') ?>images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                                        the Semantics, a large language ocean.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">English Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('front/footer') ?>