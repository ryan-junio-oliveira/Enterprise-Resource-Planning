<?php

namespace App\Routes;

use App\Routes\RouterSwitch;

class Router extends RouterSwitch
{
  public function run(string $requestUri)
  {

    switch($requestUri){
      case '/':
        $this->app();
        break;
      case '/login':
        $this->login();

    }
  }
}
