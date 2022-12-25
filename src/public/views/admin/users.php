<h1>This is user page</h1>
<?php foreach ($data['users'] as $user): ?>
<div class="text-center my-4">
	<p class="my-1"><?= $user['name'] ?></p>
	<a href="mailto:<?= $user['email'] ?>"><?= $user['email'] ?></a>
</div>
<?php endforeach; ?>
