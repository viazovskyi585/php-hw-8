<h1>This is client list page</h1>

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Home</a></li>
		<li class="breadcrumb-item"><a href="/about">About</a></li>
		<li class="breadcrumb-item active" aria-current="page">Clients list</li>
	</ol>
</nav>


<div class="row my-4 gx-5 gy-5">
	<?php foreach ($pageData['clients'] as $client): ?>
		<div class="col-sm-6 d-flex">
			<div class="card">
				<img src="<?= $client['image'] ?>" class="card-img-top" alt="">
				<div class="card-body">
					<h5 class="card-title">
						<?= $client['name'] ?>
					</h5>
					<p class="card-text"><?= $client['description'] ?></p>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
</div>
