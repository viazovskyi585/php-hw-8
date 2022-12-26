<h1>This is gallery page</h1>
<?php foreach ($data['images'] as $image): ?>
<div class="my-2">
	<img src="<?= $image ?>" class="img-fluid mx-auto d-block" alt="">
</div>
<?php endforeach ?>
