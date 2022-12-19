<?php
namespace App\Controllers;

class Home
{
	public function index()
	{
		echo "<h1>This is a home page<h1>";
	}

	public function dashboard()
	{
		echo "<h1>This is a dashboard</h1>";
	}

	public function error()
	{
		echo "<h1>Error in Home controller</h1>";
	}
}
