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

	public function error()
	{
		echo "<h1>Error in Home controller</h1>";
	}
}
