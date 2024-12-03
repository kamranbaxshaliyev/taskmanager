<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
	<h2>Edit Task</h2>
	<form method="post" action="<?= base_url('tasks/update/' . $task['id']) ?>">
		<div class="form-group">
			<label for="name">Task Name</label>
			<input type="text" name="name" id="name" class="form-control" value="<?= htmlspecialchars($task['name']) ?>"
				   required>
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="description" class="form-control"
					  required><?= htmlspecialchars($task['description']) ?></textarea>
		</div>
		<div class="form-group">
			<label for="due_date">Due Date</label>
			<input type="date" name="due_date" id="due_date" class="form-control" value="<?= $task['due_date'] ?>"
				   required>
		</div>
		<button type="submit" class="btn btn-primary">Update Task</button>
		<a href="<?= base_url('tasks') ?>" class="btn btn-secondary">Cancel</a>
	</form>
</div>
</body>
</html>
