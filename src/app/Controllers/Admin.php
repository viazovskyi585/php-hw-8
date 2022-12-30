<?php
namespace App\Controllers;
use App\Models\Admin as AdminModel;
use Core\Renderer;

class Admin
{
	static $authorization = true;

	public function authorize()
	{
		if (!isset($_SERVER['PHP_AUTH_USER'])) {
			header('WWW-Authenticate: Basic realm = "My Realm"');
			header('HTTP/1.0 401 Unauthorized');
			echo 'You must enter a valid login ID and password to access this resource';
			exit;
		}

		if ($_SERVER['PHP_AUTH_USER'] == 'admin' && $_SERVER['PHP_AUTH_PW'] == 'admin') {
			return true;
		} else {
			header('WWW-Authenticate: Basic realm = "My Realm"');
			header('HTTP/1.0 401 Unauthorized');
		}
	}
	public function index()
	{
		$model = new AdminModel();
		$data = $model->getUsers();
		Renderer::render("admin/admin", "Admin", $data);
	}

	public function user()
	{
		$userId = $_GET['id'];
		$model = new AdminModel();
		$data = $model->getUser($userId);
		Renderer::render("admin/user", "Admin", $data);
	}

	public function error()
	{
		echo "<h1>Page not found in admin area!</h1>";
	}
}
