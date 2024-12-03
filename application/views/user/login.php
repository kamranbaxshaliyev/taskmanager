<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
	<h2 class="text-center">Login</h2>
	<form method="POST" class="mt-4 mx-auto" style="max-width: 400px;">
		<?php if ($this->session->flashdata('error')): ?>
			<div class="alert alert-danger text-center"><?= $this->session->flashdata('error'); ?></div>
		<?php endif; ?>
		<div class="mb-3">
			<label for="login" class="form-label">Login</label>
			<input type="text" class="form-control" id="login" name="login" required>
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" class="form-control" id="password" name="password" required>
		</div>
		<button type="submit" class="btn btn-primary w-100">Login</button>
		<div class="mt-3 text-center">
			<a href="<?= base_url('user/register') ?>">Don't have an account? Register</a>
		</div>
	</form>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
