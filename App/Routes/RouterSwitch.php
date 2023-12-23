<?php

namespace App\Routes;

use App\Core\LoadFiles;

abstract class RouterSwitch
{
  protected function home()
  {
    require_once('./App/home.php');
  }

  protected function login()
  {
    LoadFiles::view('login', 'login');
  }

  protected function panel()
  {
    LoadFiles::view('panel', 'panel');
  }
  public function __call($method, $args)
  {
    http_response_code(404);
    LoadFiles::view('login', 'erro');
  }
}
