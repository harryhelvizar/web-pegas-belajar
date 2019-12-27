<?php $this->load->view('front/header') ?>

<body>

	<?php $this->load->view('front/navbar') ?>

	<section class="ftco-section contact-section ftco-degree-bg">
		<div class="container">
			<div class="row block-9">
				<div class="col-md-8 pr-md-5" style="margin:auto">
					<h4 class="mb-4">Silahkan Daftar!</h4>
					<?= $this->session->flashdata('message') ?>
					<form action="<?= base_url('siswa/auth/register') ?>" method="post">
						<div class="row">
							<div class="col-md-6">

								<div class="form-group">
									<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
								</div>

								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="Email">
								</div>

								<div class="form-group">
									<input type="password" name="password" id="password" class="form-control" placeholder="Password">
								</div>
								<div class="form-group">
									<input type="text" name="nis" id="nis" class="form-control" placeholder="Nomor Induk Siswa">
								</div>
							</div>
							<div class="col-md-6">

								<div class="form-group">
									<input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
								</div>

								<div class="form-group">
									<input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="Nomor HP">
								</div>
								<div class="form-group">
									<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
								</div>
								<div class="form-group">
									<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Daftar" class="btn btn-primary py-3 px-5">
						</div>
					</form>

					<p>Sudah punya akun ? Silahkan <a href="<?= base_url('siswa/auth') ?>">Masuk</a></p>
				</div>



			</div>
		</div>
	</section>



	<?php $this->load->view('front/footer') ?>