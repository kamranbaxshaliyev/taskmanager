<table class="table table-bordered">
	<thead>
	<tr>
		<th>Name</th>
		<th>Due Date</th>
		<th>Actions</th>
	</tr>
	</thead>
	<tbody>
	<?php if (!empty($tasks)): ?>
		<?php foreach ($tasks as $task): ?>
			<tr>
				<td><?= htmlspecialchars($task['name']) ?></td>
				<td><?= htmlspecialchars($task['due_date']) ?></td>
				<td>
					<a href="<?= base_url('tasks/edit/' . $task['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
					<a href="<?= base_url('tasks/delete/' . $task['id']) ?>" class="btn btn-danger btn-sm"
					   onclick="return confirm('Are you sure?')">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
	<?php else: ?>
		<tr>
			<td colspan="3" class="text-center">No tasks found.</td>
		</tr>
	<?php endif; ?>
	</tbody>
</table>
