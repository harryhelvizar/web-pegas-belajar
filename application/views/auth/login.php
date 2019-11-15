<?php $this->load->view('front/header') ?>

<body>

	<?php $this->load->view('front/navbar') ?>

	<section class="ftco-section contact-section ftco-degree-bg">
		<div class="container">
			<div class="row block-9">
				<div class="col-md-6 pr-md-5">
					<h4 class="mb-4">Silahkan login untuk lanjut!</h4>
					<?php if (validation_errors()) : ?>
						<div class="alert alert-danger" role="alert">
							<?= validation_errors(); ?>
						</div>
					<?php endif; ?>
					<?= $this->session->flashdata('message'); ?>
					<form action="<?= base_url('siswa/auth') ?>" method="post">
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
						</div>

						<div class="form-group">
							<input type="submit" value="Login" class="btn btn-primary py-3 px-5">
						</div>
					</form>

					<p>Belum punya akun ? Silahkan <a href="<?= base_url('siswa/auth/register') ?>">daftar</a></p>
				</div>



			</div>
		</div>
	</section>



	<?php $this->load->view('front/footer') ?>