<h1>This is client list page</h1>
<?php foreach ($data['clients'] as $client): ?>
<div class="client">
	<h2><?= $client['name'] ?></h2>
	<a href="<?= $client['website'] ?>"><?= $client['website'] ?></a>
</div>
<?php endforeach; ?>
