<?php $this->load->view('front/header')?>
<body>
    <div class="hero-content">

    <?php $this->load->view('front/navbar')?>


    <?php $this->load->view('front/slider')?>
       
    </div><!-- .hero-content -->



    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 align-content-lg-stretch">
                    <header class="heading">
                        <h2 class="entry-title">Mulai dari sini...</h2>

                    </header><!-- .heading -->

                    <div class="entry-content ezuca-stats">
                        <div class="stats-wrap flex flex-wrap justify-content-lg-between">
                            <button type="submit" class="btn btn-success mt-4">Siswa</button>
                        </div><!-- .stats-wrap -->
                    </div><!-- .ezuca-stats -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 flex align-content-center mt-5 mt-lg-0">
                    <div class="ezuca-video position-relative">
                        <div class="video-play-btn position-absolute">
                            <img src="<?= base_url('assets/')?>images/video-icon.png" alt="Video Play">
                        </div><!-- .video-play-btn -->

                        <img src="<?= base_url('assets/')?>images/belajar.jpg" alt="">
                    </div><!-- .ezuca-video -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .about-section -->


    <div class="icon-boxes">
            <header class="heading">
                    <h2 class="entry-title text-center mt-4 ">Informasi Gaya Belajar</h2>
            </header><!-- .heading -->
        <div class="container-fluid">
            <div class="flex flex-wrap align-items-stretch">
                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-user"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Learn From The Experts</h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer read-more">
                        <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                    </footer><!-- .entry-footer -->
                </div><!-- .icon-box -->

                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-folder"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Book Library & Store</h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer read-more">
                        <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                    </footer><!-- .entry-footer -->
                </div><!-- .icon-box -->

                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-book"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Best Course Online</h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer read-more">
                        <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                    </footer><!-- .entry-footer -->
                </div><!-- .icon-box -->

                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-world"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Best Industry Leaders</h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer read-more">
                        <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                    </footer><!-- .entry-footer -->
                </div><!-- .icon-box -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .icon-boxes -->


</style>
    <div class="milestones">
    <header class="statistik">
            <h2 class="entry-title text-center">Statistik Pengguna</h2>
    </header><!-- .heading -->

		<!-- Background image artis https://unsplash.com/@thepootphotographer -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/')?>images/milestones.jpg" data-speed="0.8"></div>
		<div class="container">

			<div class="row milestones_container">

				<!-- Milestone -->
				<div class="col-lg-4 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="<?= base_url('assets/')?>images/milestone_2.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="7286">0</div>
						<div class="milestone_text">Students</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-4 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="<?= base_url('assets/')?>images/milestone_3.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="257">0</div>
						<div class="milestone_text">Teachers</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-4 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="<?= base_url('assets/')?>images/milestone_4.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="39">0</div>
						<div class="milestone_text">Total</div>
					</div>
				</div>

			</div>
		</div>
    </div>


    <section class="testimonial-section">
        <!-- Swiper -->
        <div class="swiper-container testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6 order-2 order-lg-1 flex align-items-center mt-5 mt-lg-0">
                                <figure class="user-avatar">
                                    <img src="<?= base_url('assets/')?>images/user-1.jpg" alt="">
                                </figure><!-- .user-avatar -->
                            </div><!-- .col -->

                            <div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">
                                <div class="entry-content">
                                    <p>Together as teachers, students and universities we can help make this education available for everyone.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <h3 class="testimonial-user">Russell Stephens - <span>University in UK</span></h3>
                                </div><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .swiper-slide -->

                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6 order-2 order-lg-1 flex align-items-center mt-5 mt-lg-0">
                                <figure class="user-avatar">
                                    <img src="<?= base_url('assets/')?>images/user-2.jpg" alt="">
                                </figure><!-- .user-avatar -->
                            </div><!-- .col -->

                            <div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">
                                <div class="entry-content">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <h3 class="testimonial-user">Robert Stephens - <span>University in Oxford</span></h3>
                                </div><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .swiper-slide -->

                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6 flex order-2 order-lg-1 align-items-center mt-5 mt-lg-0">
                                <figure class="user-avatar">
                                    <img src="<?= base_url('assets/')?>images/user-3.jpg" alt="">
                                </figure><!-- .user-avatar -->
                            </div><!-- .col -->

                            <div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">
                                <div class="entry-content">
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <h3 class="testimonial-user">James Stephens - <span>University in Cambridge</span></h3>
                                </div><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->

            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                        <div class="swiper-pagination position-relative flex justify-content-center align-items-center"></div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .testimonial-slider -->
    </section><!-- .testimonial-section -->


    <?php $this->load->view('front/footer')?>