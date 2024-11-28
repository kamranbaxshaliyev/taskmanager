<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
	<h2>Add Task</h2>
	<form action="<?= base_url('tasks/store') ?>" method="post">
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="name" required>
		</div>
		<div class="form-group">
			<label for="description">Description:</label>
			<textarea class="form-control" id="description" name="description"></textarea>
		</div>
		<div class="form-group">
			<label for="due_date">Due Date:</label>
			<input type="date" class="form-control" id="due_date" name="due_date" required>
		</div>
		<button type="submit" class="btn btn-primary">Save</button>
	</form>
</div>
</body>
</html>

