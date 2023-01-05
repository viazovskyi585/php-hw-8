<?php

namespace App\Models;

use Core\Orm\Select;

class Videos
{
	public function getVideos()
	{
		$select = new Select();
		$select->setTableName("videos");
		$videos = $select->execute();
		return ['videos' => $videos];
	}
}
