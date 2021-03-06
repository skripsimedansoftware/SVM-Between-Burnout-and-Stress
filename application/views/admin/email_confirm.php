<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Konfirmasi Email</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>plugins/iCheck/square/blue.css">
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
	<style type="text/css">
		.help-block.error {
			color: red;
		}
	</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="<?= base_url() ?>">Welcome to <b>Codeigniter Starter</b></a>
	</div>
	<div class="login-box-body">
		<?php if ($this->session->has_userdata('email_confirm')) : ?>
			<?php if ($this->session->userdata('email_confirm')['status'] == 'warning') : ?>
				<p class="login-box-msg text-orange"><?= $this->session->userdata('email_confirm')['message'] ?></p>
				<?php else: ?>
				<p class="login-box-msg text-red"><?= $this->session->userdata('email_confirm')['message'] ?></p>
			<?php endif; ?>
		<?php endif; ?>
		<form action="<?= base_url($this->router->fetch_class().'/email_confirm') ?>" method="post">
			<div class="form-group has-feedback">
				<input type="text" class="form-control" placeholder="Kode Konfirmasi" name="confirm_code" value="<?= set_value('confirm_code') ?>">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				<?= form_error('confirm_code', '<span class="help-block error">', '</span>'); ?>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Konfirmasi Kode</button>
				</div>
			</div>
		</form>
		<br>
		<a href="<?= base_url($this->router->fetch_class().'/register') ?>" class="text-center">Mendaftar</a>
		<a href="<?= base_url($this->router->fetch_class().'/login') ?>" class="text-center pull-right">Masuk</a>

	</div>
</div>

<script src="<?= base_url('assets/adminlte/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/iCheck/icheck.min.js"></script>
</body>
</html>
