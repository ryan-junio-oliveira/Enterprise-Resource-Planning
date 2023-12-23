<?php

namespace App\login\Controllers;

use Exception;

session_start();

class LogoutController
{
  static function logout()
  {
    try {
      header('Location: /login');
      session_destroy();
      unset($_SESSION);
    } catch (Exception $e) {
      echo json_encode($e->getMessage());
    }
  }
}
