<?php

namespace App\Models;
use Core\Orm\Select;

class About
{
	public function getPosts(): array
	{
		$select = new Select();
		$select->setTableName("posts");
		$posts = $select->execute();
		return ['posts' => $posts];
	}
}
