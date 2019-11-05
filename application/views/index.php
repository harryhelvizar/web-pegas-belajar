<?php $this->load->view('front/header')?>
<body>
    <div class="hero-content">

    <?php $this->load->view('front/navbar')?>


    <?php $this->load->view('front/slider')?>
       
    </div><!-- .hero-content -->

    <div class="milestones">
		<!-- Background image artis https://unsplash.com/@thepootphotographer -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/')?>images/milestones.jpg" data-speed="0.8"></div>
		<div class="mt-10">

				<div class="row">
                    <div class="col-6"></div>
                    <div class="col-6">
                        <h2 class="" style="color:white;">Kenali gaya belajarmu disini!!!!</h2><br>
                        <a href="<?= base_url('soal')?>" class="btn btn-primary">mulai</a>
                    </div>			
                </div>
                
		</div>
    </div>

    <div class="icon-boxes pt-10">
            <header class="heading">
                    <h2 class="entry-title text-center mt-50 ">Informasi Gaya Belajar</h2>
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
    <div class="text-center mt-15">
        <h2>TESTIMONI</h2>
    </div>
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

    <!-- contak -->
    <div class="container">

        <div class="row justify-content-between">

            <div class="col-12 col-lg-6">
                <div class="contact-form">
                    <h3>Contact</h3>

                    <form>
                        <input type="text" placeholder="Your Name">
                        <input type="email" placeholder="Your Email">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Your Message" rows="4"></textarea>
                        <input type="submit" value="Send Message">
                    </form>
                </div><!-- .contact-form -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6">
                <div class="contact-info">
                    <h3>Contact Information</h3>

                    <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum. </p> -->

                    <ul class="p-0 m-0">
                        <li><span>Location:</span>Jl. Gunungsari | Makassar</li>
                        <li><span>Email:</span><a href="#">info.pegasbelajar@gmail.com</a></li>
                        <li><span>Phone:</span><a href="#">(203) 123-6666</a></li>
                    </ul>
                </div><!-- .contact-info -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->


    <?php $this->load->view('front/footer')?>