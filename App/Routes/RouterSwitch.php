<?php

namespace App\Routes;

use App\Core\LoadFiles;
use App\login\Controllers\LogoutController;

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
  protected function logout()
  {
    LoadFiles::controller('login', 'logout');
    LogoutController::logout();
  }
  public function __call($method, $args)
  {
    http_response_code(404);
    LoadFiles::view('login', 'erro');
  }
}
