<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $judul ;?></title>

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

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="<?= base_url() ?>assets/index2.html"><b>Admin</b>LTE</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Sign in to start your session</p>

				<?= $this->session->flashdata('message');?>

				<form action="<?= base_url('auth/signin') ?>" method="post">
					<div class="input-group mt-3">
						<input type="email" class="form-control" placeholder="Email" name="email"  value="<?= set_value('email'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<?= form_error('email', '<small class="text-danger">', '</small>') ;?>
					<div class="input-group mt-3">
						<input type="password" class="form-control" placeholder="Password" name="password"  value="<?= set_value('password'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?= form_error('password', '<small class="text-danger">', '</small>') ;?>
					<div class="row">

						<!-- /.col -->
						<div class="col-12 mt-2">
							<input type="submit" class="btn btn-primary btn-block" value="Sign In">
						</div>
						<!-- /.col -->
					</div>
				</form>


				<!-- /.social-auth-links -->

				<!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
				<p class="text-center mt-2">Belum punya akun? <a href="<?= base_url('auth/signup')?>">Daftar</a></p>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>
