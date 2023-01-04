<?php

namespace App\Models;

class Videos extends RootModel
{
	public function getVideos()
	{
		$videos = $this->getDataFromDB("SELECT * FROM videos");
		return ['videos' => $videos];
	}
}
