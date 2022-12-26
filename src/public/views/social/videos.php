<h1>This is videos page</h1>
<?php foreach ($data['videos'] as $video): ?>
<iframe class="w-100" height="600" src="<?= $video ?>" title="YouTube video player" frameborder="0"
	allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
	allowfullscreen></iframe>
<?php endforeach ?>
