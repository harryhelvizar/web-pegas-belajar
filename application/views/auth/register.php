<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('assets/login/') ?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/bootstrap/css/bootstrap.min.css">
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
				<form class="login100-form validate-form">
					<span class="login200-form-title">
						Identitas diri siswa
					</span>

					<div class="form-group">
						<div class="row">
							<div class="wrap-input200 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
								<input class="input200" type="text" name="email" placeholder="nama lengkap">
								<span class="focus-input200"></span>
								<span class="symbol-input200">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="wrap-input200 validate-input" data-validate = "name is required">
								<input class="input200" type="text" name="pass" placeholder="nama pengguna">
								<span class="focus-input200"></span>
								<span class="symbol-input200">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="wrap-input200 validate-input" data-validate = "email is required">
								<input class="input200" type="email" name="pass" placeholder="email">
								<span class="focus-input200"></span>
								<span class="symbol-input200">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="wrap-input200 validate-input" data-validate = "password is required">
								<input class="input200" type="password" name="pass" placeholder="password">
								<span class="focus-input200"></span>
								<span class="symbol-input200">
									<i class="fa fa-lock" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="wrap-input200 validate-input" data-validate = "Password is required">
								<input class="input200" type="text" name="pass" placeholder="nomor telepon">
								<span class="focus-input200"></span>
								<span class="symbol-input200">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="wrap-input200 validate-input" data-validate = "Password is required">
								<input class="input200" type="date" name="pass">
								<span class="focus-input200"></span>
								<span class="symbol-input200">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="wrap-input200 validate-input" data-validate = "Password is required">
								<input class="input200" type="text" name="pass" placeholder="asal sekolah">
								<span class="focus-input200"></span>
								<span class="symbol-input200">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="wrap-input200 validate-input" data-validate = "Password is required">
								<input class="input200" type="text" name="pass" placeholder="nomor induk">
								<span class="focus-input200"></span>
								<span class="symbol-input200">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="wrap-input200 validate-input" data-validate = "Password is required">
								<input class="input200" type="select" name="pass" placeholder="kabupaten">
								<span class="focus-input200"></span>
								<span class="symbol-input200">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="wrap-input200 validate-input" data-validate = "Password is required">
								<input class="input200" type="select" name="pass" placeholder="kode kelas">
								<span class="focus-input200"></span>
								<span class="symbol-input200">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="container-login100-form-btn">
								<button class="login100-form-btn">
									Daftar
								</button>
							</div>
						</div>

						<div class="row">
							<div class="text-center p-t-15">
							<span>Sudah punya akun?</span>
								<a class="txt2" href="<?= base_url('auth/login')?>">
									Login disini
									<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
								</a>
							</div>
						</div>

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
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>js/main.js"></script>

</body>
</html>