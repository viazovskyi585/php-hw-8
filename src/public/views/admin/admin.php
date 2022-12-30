<h1>This is admin page</h1>

<div class="list-group">
	<?php foreach ($pageData['users'] as $user): ?>
		<a href="/admin/user?id=<?= $user['id'] ?>" class="list-group-item list-group-item-action">
			<?= $user['email'] ?>
		</a>
		<?php endforeach ?>
</div>
