<?php
namespace Core;

class Router {

  public function run() {
    $url = $_SERVER['REQUEST_URI'];
    $arr = explode('/', $url);

    $className = !empty($arr[1]) ? ucfirst($arr[1]) : 'Home';
    $controllerName = "App\\Controllers\\$className";

    if (class_exists($controllerName)) {
      $controller = new $controllerName();
    } else {
      $controller = new \App\Controllers\Error404();
    }

	if (isset($controller::$authorization)) {
		if (!$controller->authorize()) {
			return;
		}
	}

    $methodName = !empty($arr[2]) ? strtolower(str_replace('-', '_', $arr[2])) : 'index';

    if (method_exists($controller, $methodName)) {
      $controller->$methodName();
    } else if (method_exists($controller, 'error')) {
      $controller->error();
    } else {
      $errorController = new \App\Controllers\Error404();
      $errorController->index();
    }
  }
}
