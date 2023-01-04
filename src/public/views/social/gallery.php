<h1>This is gallery page</h1>

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Gallery</li>
	</ol>
</nav>

<div class="my-4">
	<a class="btn btn-primary" href="/gallery/videos" role="button">Go to Videos List page</a>
</div>


<div id="carouselExample" class="carousel slide mt-5 w-50 mx-auto">
	<div class="carousel-inner">
		<?php foreach ($pageData['photos'] as $index => $photo): ?>
			<div class="carousel-item <?= $index === 0 ? "active" : "" ?>">
				<img src="<?= $photo['src'] ?>" class="d-block w-100" alt="<?= $photo['alt'] ?>">
			</div>
		<?php endforeach ?>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>
