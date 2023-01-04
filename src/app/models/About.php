<?php

namespace App\Models;

class About extends RootModel
{
	public function getPosts()
	{
		$posts = $this->getDataFromDB("SELECT * FROM posts");
		return ['posts' => $posts];
	}
}
