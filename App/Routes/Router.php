<?php

namespace App\Routes;
class Router extends RouterSwitch
{
  public function run(string $requestUri)
  {

    $route = substr($requestUri, 1);
    if($route === ''){
      $this->home();
    }else{
      $this->$route();
    }
    
  }
}
