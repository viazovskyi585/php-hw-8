<h1>This is videos page</h1>

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Home</a></li>
		<li class="breadcrumb-item"><a href="/gallery">Gallery</a></li>
		<li class="breadcrumb-item active" aria-current="page">Videos</li>
	</ol>
</nav>
<?php foreach ($pageData['videos'] as $video): ?>
	<div class="card my-4">
		<div class="card-header"><?= $video['title'] ?></div>
		<div class="card-body">
			<iframe class="w-100" height="600" src="<?= $video['src'] ?>" title="YouTube video player" frameborder="0"
				allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
				allowfullscreen></iframe>
		</div>
	</div>
<?php endforeach ?>

<iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
