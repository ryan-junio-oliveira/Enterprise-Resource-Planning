<?php

namespace App\Routes;

use Exception;

class Router extends RouterSwitch
{
  public function run(string $requestUri)
  {
    try {
      $route = substr($requestUri, 1);
      if ($route === '') {
        $this->home();
      } else {
        $this->$route();
      }
    } catch (Exception $e) {
      echo json_encode("Erro ao processar página: " . $e->getMessage());
    }
  }
}
