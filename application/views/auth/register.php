<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('assets/login/') ?>images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/bootstrap/css/bootstrap.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login200">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url('assets/login/') ?>images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="<?= base_url('auth/register') ?>">
					<span class="login100-form-title">
						Form pendaftaran
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid nama lengkap is required: jono doko">
						<input type="text" class="form-control input100" name="nama" id="nama" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
						<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>

					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid username is required: ex@abc.xyz">
						<input type="text" class="form-control input100" name="username" id="username" placeholder="Username">
						<span class="focus-input100"></span>
						<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input type="email" class="form-control input100" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input type="password" class="form-control input100" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="wrap-input100 validate-input">
						<input type="text" class="form-control input100" name="nis" id="nis" placeholder="Nomor Induk Siswa">
						<span class="focus-input100"></span>
						<?= form_error('nis', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="wrap-input100 validate-input">
						<input type="text" class="form-control input100" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah">
						<span class="focus-input100"></span>
						<?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="wrap-input100 validate-input">
						<input type="text" class="form-control input100" name="kabupaten" id="kabupaten" placeholder="Kabupaten">
						<span class="focus-input100"></span>
						<?= form_error('kabupaten', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="wrap-input100 validate-input">
						<input type="text" class="form-control input100" name="no_hp" id="no_hp" placeholder="Nomor Hp">
						<span class="focus-input100"></span>
						<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="wrap-input100 validate-input">
						<input type="text" class="form-control input100" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
						<span class="focus-input100"></span>
						<?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="wrap-input100 validate-input">
						<input type="date" class="form-control input100" name="tanggal_lahir" id="tanggal_lahir">
						<span class="focus-input100"></span>
						<?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="wrap-input100 validate-input">
						<input type="file" class="form-control" name="foto" id="foto">
						<span class="focus-input100"></span>
					</div>



					<!-- <div class="container-login100-form-btn"> -->
					<div class="row p-t-12">
						<div class="col">
							<button type="submit" class="login100-form-btn btn-primary">Daftar</button>
							<!-- <a href="" class="login100-form-btn btn-primary">daftar</a> -->
						</div>

						<div class="col">
							<a href="<?= base_url('front') ?>" class="login200-form-btn btn-danger">cancel</a>
						</div>
					</div>
					<!-- </div> -->

					<div class="text-center p-t-50">
						<span>Sudah punya akun?</span>
						<a class="txt2" href="<?= base_url('siswa/auth') ?>">
							Login disini
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/login/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>js/main.js"></script>

</body>

</html>