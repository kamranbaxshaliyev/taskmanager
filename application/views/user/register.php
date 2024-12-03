<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
	<h2 class="text-center">Register</h2>
	<form method="POST" class="mt-4 mx-auto" style="max-width: 400px;">
		<div class="mb-3">
			<label for="name" class="form-label">Name</label>
			<input type="text" class="form-control" id="name" name="name" required>
		</div>
		<div class="mb-3">
			<label for="surname" class="form-label">Surname</label>
			<input type="text" class="form-control" id="surname" name="surname" required>
		</div>
		<div class="mb-3">
			<label for="login" class="form-label">Login</label>
			<input type="text" class="form-control" id="login" name="login" required>
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" class="form-control" id="password" name="password" required>
		</div>
		<button type="submit" class="btn btn-primary w-100">Register</button>
		<div class="mt-3 text-center">
			<a href="<?= base_url('user/login') ?>">Already have an account? Login</a>
		</div>
	</form>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
