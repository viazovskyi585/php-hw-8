<?php
namespace App\Controllers;

use App\Models\Dashboard;
use Core\Renderer;


class Home
{
	public function index()
	{
		Renderer::render('social/home', "Home");
	}

	public function dashboard()
	{
		$model = new Dashboard();
		$data = $model->index();
		Renderer::render('social/dashboard', "Dashboard", $data);
	}

	public function error()
	{
		echo "<h1>Error in Home controller</h1>";
	}
}
