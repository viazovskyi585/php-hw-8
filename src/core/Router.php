<?php
namespace Core;

class Router {

  public function run() {
    $url = $_SERVER['REQUEST_URI'];
    $arr = explode('/', $url);
  }
}
