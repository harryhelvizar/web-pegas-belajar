<?php $this->load->view('front/header')?>
<body>
    <div class="hero-content">

        <?php $this->load->view('front/navbar')?>
       
    </div><!-- .hero-content -->

    <div class="milestones">
		<!-- Background image artis https://unsplash.com/@thepootphotographer -->
		<div class="parallax_background" data-parallax="scroll" data-image-src="<?= base_url('assets/')?>images/slide1.jpg" data-speed="0.8"></div>
		<div class="mt-10">

				<div class="row">
                    <div class="col">
                        <br class="pt-70">
                    </div>			
                </div>
                
		</div>
    </div>

    <div class="kerja-soal">
        <div class="container">
            <div class="row">
                <div class="col judul-soal mt-3">
                    <h2 class="text-center">soal matematika</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                    <li>1</li>
                </div>
            </div>
        </div>
    </div>



    <?php $this->load->view('front/footer')?>