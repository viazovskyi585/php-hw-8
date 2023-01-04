<?php

namespace App\Models;

class Gallery extends RootModel
{
	public function getPhotos()
	{
		$photos = $this->getDataFromDB("SELECT * FROM photos");
		return ['photos' => $photos];
	}
}
