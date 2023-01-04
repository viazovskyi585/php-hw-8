<?php

namespace App\Models;
use Core\Orm\Select;

class Gallery
{
	public function getPhotos()
	{
		$select = new Select();
		$select->setTableName("photos");
		$photos = $select->execute();
		return ['photos' => $photos];
	}
}
