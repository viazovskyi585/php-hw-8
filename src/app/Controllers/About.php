<?php
namespace App\Controllers;
use App\Models\About as AboutModel;
use App\Models\Clients;
use Core\Renderer;

class About
{
	public function index()
	{
		$model = new AboutModel();
		$data = $model->getPosts();
		Renderer::render("social/about", "About", $data);
	}

	public function clients_list()
	{
		$model = new Clients();
		$data = $model->getClients();
		Renderer::render("social/clients_list", "Clients List", $data);
	}
}
