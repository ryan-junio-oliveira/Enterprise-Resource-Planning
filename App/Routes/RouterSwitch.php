<?php

namespace App\Routes;

abstract class RouterSwitch{
  protected function app(){
    require_once('./App/Views/App.php');
  }
  protected function login(){
    require_once('./App/Views/Login.php');
  }

}