<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Registration Page (v2)</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
	<div class="register-box">
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<a href="#" class="h1"><b>Admin</b>LTE</a>
			</div>
			<div class="card-body">
				<p class="login-box-msg">Daftar Akun Baru</p>

				<?= $this->session->flashdata('message');?>

				<form action="<?= base_url('auth/signup') ;?>" method="post">
					<div class="input-group mb-2">
						<input type="text" class="form-control" placeholder="Full name" name="fullname" value="<?= set_value('fullname'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
						
					</div>
					<?= form_error('fullname', '<small class="text-danger">', '</small>') ;?>
					<div class="input-group mb-2">
						<input type="email" class="form-control" placeholder="Email" name="email" value="<?= set_value('email'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
						
					</div>
					<?= form_error('email', '<small class="text-danger">', '</small>') ;?>
					<div class="input-group mb-2">
						<input type="password" class="form-control" placeholder="Password" name="password1" value="<?= set_value('password1'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
						
					</div>
					<?= form_error('password1', '<small class="text-danger">', '</small>') ;?>
					<div class="input-group mb-2">
						<input type="password" class="form-control" placeholder="Retype password" name="password2" value="<?= set_value('password2'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?= form_error('password2', '<small class="text-danger">', '</small>') ;?>
					<div class="col-12">
						<input type="submit" class="btn btn-primary btn-block" value="Sign Up">
					</div>
				</form>

				<p class="text-center mt-2">Sudah Mempunyai Akun? <a href="<?= base_url('auth/signin') ?>">Sign In</a></p>
			</div>
			<!-- /.form-box -->
		</div><!-- /.card -->
	</div>
	<!-- /.register-box -->

	<!-- jQuery -->
	<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>
