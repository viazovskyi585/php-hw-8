<?php
namespace App\Controllers;

use App\Models\Gallery as GalleryModel;
use App\Models\Videos;
use Core\Renderer;

class Gallery
{
	public function index()
	{
		$model = new GalleryModel();
		$data = $model->getPhotos();
		Renderer::render('social/gallery', "Gallery", $data);
	}

	public function videos()
	{
		$model = new Videos();
		$data = $model->getVideos();
		Renderer::render('social/videos', "Videos", $data);
	}
}
