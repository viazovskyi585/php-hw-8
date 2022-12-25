<?php

namespace App\Models;

class Gallery
{
	public function index()
	{
		return [
			"images" => [
				"https://picsum.photos/200/300",
				"https://picsum.photos/300/200",
				"https://picsum.photos/400/400",
			]
		];
	}
}
