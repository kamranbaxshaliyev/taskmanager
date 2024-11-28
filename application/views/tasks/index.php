<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
	<h2>Task List</h2>
	<a href="<?= base_url('tasks/create') ?>" class="btn btn-primary mb-3">Add Task</a>
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>Name</th>
			<th>Due Date</th>
			<th>Actions</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($tasks as $task): ?>
			<tr>
				<td><?= $task['name'] ?></td>
				<td><?= $task['due_date'] ?></td>
				<td>
					<a href="<?= base_url('tasks/edit/' . $task['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
					<a href="<?= base_url('tasks/delete/' . $task['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>
</body>
</html>
